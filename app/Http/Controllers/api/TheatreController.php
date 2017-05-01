<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use View;

class TheatreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //   print("edd");
    //   // $output = new \Symfony\Component\Console\Output\ConsoleOutput(2);
    //   // $output->writeln('hello');
    //   // return [
    //   //       'have' => $have,
    //   //       'paid' => $paid
    //   // ];
    //   return view('controller');
    // }

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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

      $have = $request->input('have');
      $paid = $request->input('paid');

      if($have>$paid){
        $change = $have-$paid;
        $data = array();

        $onet = 0;
        $fiveh = 0;
        $oneh = 0;
        $fivet = 0;
        $twen = 0;
        $ten = 0;
        $five = 0;
        $two = 0;
        $one= 0;


        $balance = $have - $paid;

        if($balance >0){
          if($balance >= 1000){
            $onet = $balance/1000;
            // $array = array_add(['balance' => '$balance/1000']);
            $balance = $balance % 1000;
          }

          if($balance >= 500){
            $fiveh = $balance/500;
            $balance = $balance%500;
          }

          if($balance >= 100){
            $oneh = $balance/100;
            $balance = $balance%100;
          }

          if($balance >= 50){
            $fivet = $balance/50;
            $balance = $balance%50;
          }

          if($balance >= 20){

            $twen = $balance/20;
            $balance = $balance%20;
          }
          if($balance >= 10){
            $ten = $balance/10;
            $balance = $balance%10;
          }

          if($balance >= 5){
            $five = $balance/5;
            $balance = $balance%5;
          }

          if($balance >= 2){
            $two = $balance/2;
            $balance = $balance % 5;
          }
          if($balance >= 1){
            $one = $balance/1;
            $balance = $balance % 1;
          }
        }

        $data = array(
          'onet'=> $onet,
          'fiveh'=> $fiveh,
          'oneh'=>$oneh,
          'fivet'=>  $fivet,
          'twen'=>  $twen,
          'ten'=>  $ten,
          'five'=>  $five,
          'two'=>  $two,
          'one'=>  $one
        );
      }
        return view("welcom")->with('data')->with('change');
        // return view('welcome', $change);

        // return view("welcome",compact('array','change');

        // return view("controller")->with('array')->with('change');
          // dd(request['money' 'paid'])
          // $post = new Post;
          // $post->have = request('have');
          // $post->paid = request('paid');
          //
          // return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function change($have,$paid){
      // $change = "aห";
      $balance = 0;
      $data = array();
      $onet = 0;
      $fiveh = 0;
      $oneh = 0;
      $fivet = 0;
      $twen = 0;
      $ten = 0;
      $five = 0;
      $two = 0;
      $one= 0;
      $change = 0;

      // $this->info('Creating sample users...');
      if($have > $paid){
        // $balance = "b";
        $change = $have-$paid;
        // $change = "a";
        $balance = $have - $paid;
        // {{ $balance }}

        if($balance >0){
          if($balance >= 1000){
            $onet = $balance/1000;
            // $array = array_add(['balance' => '$balance/1000']);
            $balance = $balance % 1000;
          }

          if($balance >= 500){
            $fiveh = $balance/500;
            $balance = $balance%500;
          }

          if($balance >= 100){
            $oneh = $balance/100;
            $balance = $balance%100;
          }

          if($balance >= 50){
            $fivet = $balance/50;
            $balance = $balance%50;
          }

          if($balance >= 20){

            $twen = $balance/20;
            $balance = $balance%20;
          }
          if($balance >= 10){
            $ten = $balance/10;
            $balance = $balance%10;
          }

          if($balance >= 5){
            $five = $balance/5;
            $balance = $balance%5;
          }

          if($balance >= 2){
            $two = $balance/2;
            $balance = $balance % 5;
          }
          if($balance >= 1){
            $one = $balance/1;
            $balance = $balance % 1;
          }

          $data = array(
            'onet'=> $onet,
            'fiveh'=> $fiveh,
            'oneh'=>$oneh,
            'fivet'=>  $fivet,
            'twen'=>  $twen,
            'ten'=>  $ten,
            'five'=>  $five,
            'two'=>  $two,
            'one'=>  $one
          );

        }

        // $data = array(
        //   'onet'=> $onet,
        //   'fiveh'=> $fiveh,
        //   'oneh'=>$oneh,
        //   'fivet'=>  $fivet,
        //   'twen'=>  $twen,
        //   'ten'=>  $ten,
        //   'five'=>  $five,
        //   'two'=>  $two,
        //   'one'=>  $one
        // );
      }

      else{
        $this->error("Sorry, System can't change");
        // error_log("Sorry, System can't change");

        // alert("Sorry, System can't change");
      }

      // return ['name' => 'nongsu'];
      // return [
      //
      //       $balance="t5t5t5";
      //       'total' => $balance];
      // return $have;
      return['change' => $change];

    }
}
