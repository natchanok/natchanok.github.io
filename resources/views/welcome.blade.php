<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>The Bank</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.1/css/bulma.css">
        <!-- <link rel="stylesheet" type="text/css" href="/public/css/style.css"> -->

        <style>

            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            abbr[title], dfn[title] {
              border-bottom: 1px dotted #000;
              cursor: help;
            }
            strong {
              font-weight: bold;
            }


            button,
            input,
            select,
            textarea {
              font-family: "Helvetica Neue", "Helvetica", "Arial", sans-serif;
            }

            table {
              width: 100%;
              font-family: "Helvetica Neue", "Helvetica", "Arial", sans-serif;
            }

            table td,
            table th {
              text-align: left;
              vertical-align: top;
            }

            table th {
              color: #222324;
            }

            .footer a, .footer a:visited {
              color: #69707a;
            }

            .footer a:hover, .footer a:visited:hover {
              color: #222324;
            }

            .title.is-3{
              font-family: "Comic Sans MS", cursive;

            }

            .title.is-4{
              font-weight: bold;
            }

        </style>
    </head>
    <body>
      <nav class="nav">
        <div class="nav-left">
          <!-- <a class="nav-item">
            <img src="https://pbs.twimg.com/profile_images/812241597740044288/XPPQiX83.jpg" alt="Bulma logo">
          </a> -->
        </div>

        <div class="nav-center">
          <a class="nav-item">
            <span class="icon">
              <i class="fa fa-github"></i>
            </span>
          </a>
          <a class="nav-item">
            <span class="icon">
              <i class="fa fa-twitter"></i>
            </span>
          </a>
        </div>

        <!-- This "nav-toggle" hamburger menu is only visible on mobile -->
        <!-- You need JavaScript to toggle the "is-active" class on "nav-menu" -->
        <span class="nav-toggle">
          <span></span>
          <span></span>
          <span></span>
        </span>

        <!-- This "nav-menu" is hidden on mobile -->
        <!-- Add the modifier "is-active" to display it on mobile -->
        <div class="nav-right nav-menu">
          <a class="nav-item">
            Home
          </a>
          <a class="nav-item">
            Documentation
          </a>
          <a class="nav-item">
            Blog
          </a>

          <div class="nav-item">
            <div class="field is-grouped">
              <p class="control">
                <a class="button" >
                  <span class="icon">
                    <i class="fa fa-twitter"></i>
                  </span>
                  <span>Tweet</span>
                </a>
              </p>
              <p class="control">
                <a class="button is-primary">
                  <span class="icon">
                    <i class="fa fa-download"></i>
                  </span>
                  <span>Download</span>
                </a>
              </p>
            </div>
          </div>
        </div>
      </nav>

         <!-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif -->

            <div class="content">

                <div class="title m-b-md">
                    Give The Change
                </div>

                <div class="links">
                    <a href="https://www.bot.or.th/Thai/Banknotes/HistoryAndSeriesOfBanknotes/Pages/All_Series_of_Banknotes.aspx">Banknote</a>
                    <a href="welcome">Calculate</a>

                </div>
            </div>

            <section class="hero is-primary is-medium">
              <div class="hero-body">
                <div class="container has-text-centered">
                  <h1 class="title is-4">
                    Please fill you want to give the change
                  </h1>
                  <!-- <h2 class="subtitle is-4"> -->


                   <div class="section">
                     <div class="container"> -->
                       <div class="columns">
                         <div class="column is-6">


                           <form action="change" method="post">
                             <div class="form-group">
                               <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                  <div class="field">
                                    <p class="control has-icons-left has-icons-right">

                                   <input class="input is-medium" type="number"  name="have" placeholder="Enter your money">
                                   <span class="icon is-left">
                                     <i class="fa fa-money"></i>
                                   </span>
                                   <span class="icon is-right">
                                     <i class="fa fa-check"></i>
                                   </span>
                                 </p>
                               </div>
                            </div>


                            <div class="form-group">
                              <div class="field">
                               <p class="control has-icons-left has-icons-right">
                                 <input class="input is-medium" type="number"  name="paid"  placeholder="Enter amount of paid">

                                 <span class="icon is-left">
                                   <i class="fa fa-fa fa-btc"></i>
                                 </span>
                                 <span class="icon is-right">
                                   <i class="fa fa-check"></i>
                                 </span>
                               </p>
                             </div>
                           </div>

                            <br>
                           <button type="submit" class="button is-medium is-danger">calculate</button>
                         </form>
                      </div>

                      <!-- <div class="container"> -->
                         <div class="column is-4 is-offset-1">
                           <div class="title is-3" style="color:#ed6c63">Your balance is </div>
                           <p class="title is-3 has-text-muted" style="color:#ed6c63">{{ $change or '' }}฿</p>

                           <br>
                           <table class="table is-striped">
                             <tbody>


                               <tr>
                                 <td class="has-text-right">
                                   <strong>1000 baht.</strong>
                                 </td>
                                 <!-- <td>{{"data[0]"}}</td> -->
                                 <td>0</td>
                               </tr>
                               <tr>
                                 <td class="has-text-right">
                                   <strong>500 baht.</strong>
                                 </td>
                                 <!-- <td>{{"data[0]"}}</td> -->
                                 <td>0</td>
                               </tr>
                               <tr>
                                 <td class="has-text-right">
                                   <strong>100 baht.</strong>
                                 </td>
                                 <!-- <td>{{"data[0]"}}</td> -->
                                 <td>0</td>
                               </tr>
                               <tr>
                                 <td class="has-text-right">
                                   <strong>50 baht.</strong>
                                 </td>
                                 <!-- <td>{{"data[0]"}}</td> -->
                                 <td>0</td>
                               </tr>
                               <tr>
                                 <td class="has-text-right">
                                   <strong>20 baht.</strong>
                                 </td>
                                 <!-- <td>{{"data[0]"}}</td> -->
                                 <td>0</td>
                               </tr>
                               <tr>
                                 <td class="has-text-right">
                                   <strong>10 baht.</strong>
                                 </td>
                                 <!-- <td>{{"data[0]"}}</td> -->
                                 <td>0</td>
                               </tr>
                               <tr>
                                 <td class="has-text-right">
                                   <strong>5 baht.</strong>
                                 </td>
                                 <!-- <td>{{"data[0]"}}</td> -->
                                 <td>0</td>
                               </tr>
                               <tr>
                                 <td class="has-text-right">
                                   <strong>2 baht.</strong>
                                 </td>
                                 <!-- <td>{{"data[0]"}}</td> -->
                                 <td>0</td>
                               </tr>
                               <tr>
                                 <td class="has-text-right">
                                   <strong>1 baht.</strong>
                                 </td>
                                 <!-- <td>{{"data[0]"}}</td> -->
                                 <td>0</td>
                               </tr>

                             </tbody>
                           </table>
                         </div>
                       <!-- </div> -->
                     </div>
                   </div>

                  <!-- </h2> -->
                </div>
              </div>
            </section>
         <!-- </div>  -->
    </body>
</html>
