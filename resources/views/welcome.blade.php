<!DOCTYPE html>
  <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Vueravel Market</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"/>

        <link src="{{ mix('css/app.css') }}" rel= "stylesheet" type="text/css"/>
        <link src="{{ mix('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>
        
    </head>
    <!-- <body>
      <section class="hero is-primary is-fullheight">
        <div class="hero-body">
          <div class="container">
            <div class="columns is-centered">
              <div class="column is-5-tablet is-4-desktop is-3-widescreen">
                <form action="" class="box">
                  <div class="field">
                    <label for="" class="label">Email</label>
                    <div class="control has-icons-left">
                      <input type="email" placeholder="e.g. bobsmith@gmail.com" class="input" required>
                      <span class="icon is-small is-left">
                        <i class="fa fa-envelope"></i>
                      </span>
                    </div>
                  </div>
                  <div class="field">
                    <label for="" class="label">Password</label>
                    <div class="control has-icons-left">
                      <input type="password" placeholder="*******" class="input" required>
                      <span class="icon is-small is-left">
                        <i class="fa fa-lock"></i>
                      </span>
                    </div>
                  </div>
                  <div class="field">
                    <label for="" class="checkbox">
                      <input type="checkbox">
                     Remember me
                    </label>
                  </div>
                  <div class="field">
                    <button class="button is-success">
                      Login
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    </body> -->
    <body >
  <section class="hero is-fullheight" >
    <div class="hero-body">
      <div class="container has-text-centered">
        <div class="column is-4 is-offset-4">
          <div class="box">
            <p class="subtitle is-4 has-text-grey" >Please login to proceed.</p><br>
            <form>
              <div class="field">
                <p class="control has-icons-left has-icons-right">
                  <input class="input is-medium" type="email" placeholder="Email">
                  <span class="icon is-medium is-left">
                    <i class="fas fa-envelope"></i>
                  </span>
                  <span class="icon is-medium is-right">
                    <i class="fas fa-check"></i>
                  </span>
                </p>
              </div>

              <div class="field">
                <p class="control has-icons-left">
                  <input class="input is-medium" type="password" placeholder="Password">
                  <span class="icon is-small is-left">
                    <i class="fas fa-lock"></i>
                  </span>
                </p>
              </div>
              <div class="field">
                <label class="checkbox">
                  <input type="checkbox">
                  Remember me
                </label>
              </div>
              <button class="button is-block is-info is-large is-fullwidth">Login</button><br>
              <p class="subtitle is-5">Login using Social Media</p>
              <button class="facebook-button button is-medium"><i class="fab fa-facebook-f"></i></button>
              <button class="twitter-button button is-medium"><i class="fab fa-twitter"></i></button>
              <button class="google-button button is-medium"><i class="fab fa-google-plus-g"></i></button>
            </form>
          </div>
          <p class="has-text-grey">
            <a href="../">Sign Up</a> &nbsp;·&nbsp;
            <a href="../">Forgot Password</a> &nbsp;·&nbsp;
            <a href="../">Need Help?</a>
          </p>
          <div class="languages select is-small is-rounded">
            <select>
              <option selected>English</option>
              <option>French</option>
              <option>German</option>
              <option>Italian</option>
            </select>
          </div>
        </div>
      </div>
    </div>

    <div class="hero-foot">
      <div class="container">
        <div class="tabs is-centered">
          <ul>
            <li class="footer-text"><a href="https://www.aldiduzha.com" style="color:white;">Designed with  <i class="fa fa-heart fa-fw" style="font-size: 10px; color:red;"></i>  by Aldi Duzha</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
</body>
  </html>

