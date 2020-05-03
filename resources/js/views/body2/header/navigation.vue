<template>
  <nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="https://bulma.io">
      <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
    </a>

    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" >
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div class="navbar-menu">
   <!--  <div class="navbar-start">
      
    </div> -->

    <div class="navbar-end">

      <div class="navbar-item is-expanded">
        <div  class="field has-addons">
          <p class="control">
            <input type="text" name="search" placeholder="Search..." class="input is-expanded" width="250" />
          </p>
          
          <p class="control">
            <a class="button is-info">
              <strong>search</strong>
            </a>
          </p>
          
        </div>
        
      </div>

      <div class="navbar-item">
        <span class="button is-rounded">
          <i class="fa fa-user"></i>Profile
        </span>
        
      </div>

      <div class="navbar-item">
        <span class="button is-rounded">
          <i class="fa fa-list-alt"></i>Orders
        </span>
      </div>

      <div class="navbar-item">
        <span class="button is-rounded">
          <i class="fa fa-shopping-cart"></i>Cart
        </span>
      </div>
    </div>
  </div>
</nav>
<!-- <nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" >
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div class="navbar-menu">
    <div class="navbar-start">
      <div class="navbar-item">
        <input type="search" name="search" placeholder="&#xf002 Search..." />
        <a class="button is-info is-rounded">
          <strong>search</strong>
        </a>
      </div>
      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">
          More
        </a>

        <div class="navbar-dropdown">
          
          <a class="navbar-item">
            Jobs
          </a>
          Youre supposed to create new vue files which will deal with 
          data display on the dropdown

          <a class="navbar-item">
            Contact
          </a>
          <hr class="navbar-divider">
          <a class="navbar-item">
            Report an issue
          </a>
        </div>
      </div>
    </div>

    <div class="navbar-end">
      <a class="navbar-item">
        Profile
      </a>

      <a class="navbar-item">
        Help
      </a>

      <a class="navbar-item">
        Cart
      </a>
    </div>
  </div>
</nav>

<nav class="navbar" role="navigation">

  <div class="navbar-menu">
    <div class="navbar-start">
      <div class="navbar-item">
        
      </div>
    </div>

    <div class="navbar-end">
      <a class="navbar-item">
        Profile
      </a>

      <a class="navbar-item">
        Help
      </a>

      <a class="navbar-item">
        Cart
      </a>
    </div>
  </div>
</nav> -->
<!-- youll add the second nav later -->
</template>

<script>
  export default{
    name:'navigation'
    
  }
</script>
