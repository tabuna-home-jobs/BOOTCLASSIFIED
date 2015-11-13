<?php

    namespace App\Http\Controllers\Guest;

    use App\Http\Controllers\Controller;
    use App\Http\Requests;
    use App\Http\Requests\FeedBackRequest;
    use Flash;
    use Illuminate\Http\Request;
    use Mail;

    class AdvertisingController extends Controller
    {
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            //
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            //
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request $request
         *
         * @return \Illuminate\Http\Response
         */
        public function store(FeedBackRequest $request, $advertising)
        {

            Mail::send('emails.feedback', ['request' => $request->all()], function ($message) use ($advertising) {
                $message
                    ->from('noreply@awedo.ru')
                    ->to($advertising->email)
                    ->subject('Вашим объявлением заинтересовались');
            });

            Flash::success('Вы успешно отправиили сообщение');

            return redirect()->back();

        }

        /**
         * Display the specified resource.
         *
         * @param  $category $advertising
         *
         * @return \Illuminate\Http\Response
         */
        public function show($category, $advertising)
        {
            $advertising->visits++;
            $advertising->save();

            return view('guest.adv', [
                'category'    => $category,
                'advertising' => $advertising,
            ]);
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param  int $id
         *
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {
            //
        }

        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request $request
         * @param  int                      $id
         *
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, $id)
        {
            //
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  int $id
         *
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            //
        }
    }
