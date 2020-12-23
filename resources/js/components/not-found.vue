<template>
  <section class="not-found">
    <div class="err-page text-center">
      <img src="/images/not-found.png" class="img-responsive" alt="not found">

      <div class="error-content text-center">
         <i class="fa fa-warning fa-3x"></i>
        <h1>
          Désole !! Page Introuvable
        </h1>
      </div>

      <!-- /.error-content -->
    </div>
    <!-- /.error-page -->
  </section>
</template>

<style lang="scss">
.not-found {
  height:100vh;
  background: #2c3e50;
  display: flex;
  justify-content: center;
  align-items: center;
  .err-page {
    margin-top: 50px;
    img {
        width:65%;
        height:340px;
    }
    .error-content {
      color: #555;
      .fa {
          color: #18bc9c;
          display: block;
          font-size: 100px;
          margin:5px 0;
        }
      h1 {
        // font-size: 29px;
        margin-top: 0;

        color:#18bc9c;
      }

    }
  }
}
</style>
