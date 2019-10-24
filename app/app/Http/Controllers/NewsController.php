<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class NewsController extends Controller
{


    public function index(Request $request)
    {
        $data = [
            'name' => Session::get('fullName')
        ];
        return view('news.add', ['data' => $data]);
    }

    public function news(Request $request)
    {
        $news = News::all();
        $data = [];
        if ($news == null) {
            $data = [
                'name' => Session::get('fullName'),
            ];
            return view('news.news', ['data' => $data])->with('message', 'هیچ خبری یافت نشد');
        } else {
            $data = [
                'name' => Session::get('fullName'),
                'news' => $news
            ];
            return view('news.news', ['data' => $data]);
        }

    }

    public function edit(Request $request, $id)
    {
        $data = [
            'name' => Session::get('fullName'),
            'caption'=> News::where('id', $id)->get()->pluck('caption')
        ];
        $messages = [
            'required' => 'فیلد :attribute نباید خالی باشد',
            'attribute' => [
                'caption' => 'متن خبر'
            ]
        ];
        $validator = Validator::make($request->all(), [
            'caption' => 'required|max:1000|min:3',
            'file' => 'max:3000000',
        ], $messages);

        if ($validator->fails()) {
            return view('news.edit')
                ->withErrors($validator);
        } else {
            $destinationPath = 'tmp/uploads/files';
            $caption = $request->input('caption');
            $file = $request->file('file');
            if ($request->hasFile('file')) {
                $file->move($destinationPath, $file->getClientOriginalName());
                News::where('id', $id)->update(['caption' => $caption, 'date'=>'198', 'media'=>base64_encode($file->getClientOriginalName())]);
            } else {
                News::where('id', $id)->update(['caption' => $caption, 'date'=>'198']);
            }
            return view('news.edit', ['data' => $data])->with('message', 'عملیات موفقیت آمیز بود!');
        }
    }

    public function down(Request $request, $id)
    {
        $data = [
            'name' => Session::get('fullName'),
            'id'=>$id
        ];
        $post =News::where('id',$request->input('ids'))->first();

        if ($post != null && $request->has('ids')) {
            $post->delete();
            return redirect()->route('news.delete')->with(['message'=> 'Successfully deleted!!']);
        }

        return redirect()->route('news.delete', ['data' => $data])->with(['message'=> 'Wrong ID!!']);
    }

    public function deleteIndex(Request $request, $id)
    {
        $data = [
            'name' => Session::get('fullName'),
            'id'=>$id
        ];
        return view('news.delete', ['data' => $data]);
    }

    public function send(Request $request)
    {
        $data = [
            'name' => Session::get('fullName')
        ];
        $messages = [
            'required' => 'فیلد :attribute نباید خالی باشد',
            'attribute' => [
                'caption' => 'متن خبر'
            ]
        ];
        $validator = Validator::make($request->all(), [
            'caption' => 'required|max:1000|min:3',
            'file' => 'max:3000000',
        ], $messages);


        if ($validator->fails()) {
            return view('news.add')
                ->withErrors($validator);
        } else {
            $destinationPath = 'tmp/uploads/files';
            $caption = $request->input('caption');
            $file = $request->file('file');
            if ($request->hasFile('file')) {
                $file->move($destinationPath, $file->getClientOriginalName());
                $news = new News;
                $news->caption = $caption;
                $news->date = '1398';
                $news->media = base64_encode($file->getClientOriginalName());
                $news->save();
            } else {
                $news = new News;
                $news->date = '1398';
                $news->caption = $caption;
                $news->save();
            }
            return view('news.add', ['data'=>$data])->with('message', 'عملیات موفقیت آمیز بود!');
        }
    }
}
