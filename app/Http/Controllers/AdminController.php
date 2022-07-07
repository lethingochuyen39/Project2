<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Customer;
use App\Models\Feedback;
use App\Http\Requests\AdminLoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login()
    {

        return view('admin.login-admin');
    }

    public function postLogin(AdminLoginRequest $request)
    {
        $arr = [
            'email' => $request->email,
            'password' => $request->password

        ];
        $remember  = $request->has('remember') ? true : false;
        if (Auth::attempt($arr, $remember)) {
            if (Auth::user()->role == 1) {
                return redirect()->route('admin.dashboard');
            }
            elseif (Auth::user()->role == 2) {
                return redirect()->route('admin.customer');
            }
            elseif (Auth::user()->role == 3) {

                return redirect()->route('admin.login');
            }elseif (Auth::user()->role == 4) {

                return redirect()->route('admin.login');
            }
        } else {
            return redirect()->route('admin.login')->with('thongbao', 'Email hoặc mật khẩu chưa đúng , vui lòng nhập lại!');
        }
    }


    public function dashboard()
    {
        return view('admin.dashboard-admin');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }


    // khach hang
    public function customer()
    {
        $customers = Customer::all();
        return view('admin.customer', ['customers' => $customers]);
    }

    public function showCustomer($customer_id)
    {
        $p = Customer::find($customer_id);
        return view('admin.show-customer', ['p' => $p]);
    }

    public function editCustomer($customer_id)
    {
        $p = Customer::find($customer_id);
        return view('admin.edit-customer', ['p' => $p]);
    }

    public function postEditCustomer(Request $request, $customer_id)
    {
        $customer_status = $request->input('customer_status');

        $p = Customer::find($customer_id);
        $p->update([
            'customer_status' => $customer_status,
        ]);
        return redirect()->route('admin.customer');
    }

    public function deleteCustomer($customer_id)
    {
        $p = Customer::find($customer_id);
        $p->delete();
        return redirect()->route('admin.customer');
    }

    // binh luan
    public function comment()
    {
        $comments = Comment::all();
        return view('admin.comment', ['comments' => $comments]);
    }

    public function replyComment($comment_id)
    {
        $p = Comment::find($comment_id);
        return view('admin.reply-comment', ['p' => $p]);
    }

    public function postReplyComment(Request $request, $comment_id)
    {
        $comment_reply = $request->comment_reply;

        $p = Comment::find($comment_id);
        $p->comment_reply = $comment_reply;
        $p->save();
        return redirect()->route('admin.comment');
    }

    public function deleteComment($comment_id)
    {
        $p = Comment::find($comment_id);
        $p->delete();
        return redirect()->route('admin.comment');
    }

    // phan hoi
    public function feedback()
    {
        $feedbacks = Feedback::all();
        return view('admin.feedback', ['feedbacks' => $feedbacks]);
    }

    public function showFeedback($feedback_id)
    {
        $p = Feedback::find($feedback_id);
        return view('admin.show-feedback', ['p' => $p]);
    }

    public function deleteFeedback($feedback_id)
    {
        $p = Feedback::find($feedback_id);
        $p->delete();
        return redirect()->route('admin.feedback');
    }
    
}
