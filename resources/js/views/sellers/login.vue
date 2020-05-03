
<template>
 <div id='start'>
    <section class="hero is-primary is-fullheight" >
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
                        <i class="fa fa-envelope"></i>
                      </span>
                      <span class="icon is-medium is-right">
                        <i class="fa fa-check"></i>
                      </span>
                    </p>
                  </div>

                  <div class="field">
                    <p class="control has-icons-left">
                      <input class="input is-medium" type="password" placeholder="Password">
                      <span class="icon is-small is-left">
                        <i class="fa fa-lock"></i>
                      </span>
                    </p>
                  </div>
                  <div class="field">
                    <label class="checkbox is-left">
                      <input type="checkbox">
                      Remember me
                    </label>
                  </div>
                  <router-link class="button is-block is-info is-large is-fullwidth" to='/body' >Login</router-link><br>
                  <p class="subtitle is-5">Login using Social Media</p>
                  <button class="facebook-button button is-medium"><i class="fa fa-facebook-f"></i></button>
                  <button class="twitter-button button is-medium"><i class="fa fa-twitter"></i></button>
                  <button class="google-button button is-medium"><i class="fa fa-google-plus"></i></button>
                </form>
              </div>
              <p class="has-text-grey">
                <a href="../">Sign Up</a> &nbsp;·&nbsp;
                <a href="../">Forgot Password</a> &nbsp;·&nbsp;
                <a href="../">Need Help?</a>
              </p>
            </div>
          </div>
        </div>
      </section>
  </div>	
</template>

<script>
export default {
	name: 'login',
};
</script>
