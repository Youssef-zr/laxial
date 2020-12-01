<template>
  <section class="not-found">
    <div class="err-page">
      <h2 class="headline">404</h2>

      <div class="error-content text-center">
         <i class="fa fa-warning fa-3x"></i>
        <h1>
          Sorry !! Page Not Found
        </h1>

        <router-link to='/' class="display-3 text-warning"><i class="fa fa-chevron-left"> </i>Back</router-link>
      </div>

      <!-- /.error-content -->
    </div>
    <!-- /.error-page -->
  </section>
</template>

<style lang="scss">
.not-found {
  height:100vh;
  background: rgb(29, 138, 165);
  display: flex;
  justify-content: center;
  .err-page {
    margin-top: 50px;
    .headline {
      color: #f39c12;
      font-weight: bold;
      font-size: 100px;
      margin: 10px 0 0;
      text-align: center;
    }
    .error-content {
      color: #555;
      .fa {
          color: #f39c12;
          display: block;
          font-size: 100px;
          margin:5px 0;
        }
      h1 {
        // font-size: 29px;
        margin-top: 0;

        color:#f39c12;
      }

    }
  }
}
</style>
