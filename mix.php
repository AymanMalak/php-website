<?php
  include('home/header.php');
?>

    <!-- Service -->
    <section id="service" class=" block py-5">
        <h3 class="span-color">  دروسنا الرائعة  </h3>
        <div class="container">
            <div class="row">
                <div class="content col-md-4 col-12 "  >
                    <span>  <i class="fa fa-laptop" aria-hidden="true"></i>   </span>
                    <h5>  تصميم الموقع  </h5>
                    <p>        هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                    </p>
                </div>
                <div class="content col-md-4 col-12 static ">
                    <span>   <i class="fa fa-cloud" aria-hidden="true"></i>   </span>
                    <h5>  حوسبة سحابية  </h5>
                    <p>        هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                    </p>
                </div>
                <div class="content col-md-4 col-12 " >
                    <span>   <i class="fa fa-android    "></i>   </span>
                    <h5>  تطبيقات الهاتف  </h5>
                        <p>        هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                        </p>
                </div>
            </div>
        </div>
    </section>
    <!-- /Service -->
    <!-- style -->
    <style>

      * {
        -webkit-box-sizing: border-box;
                box-sizing: border-box;
        padding: 0;
        margin: 0;
        }

      html {
        font-size: 16px;
      }

      .container {
        width: 90%;
        margin: 0 auto;
      }

      .row {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-pack: distribute;
            justify-content: space-around;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
            -ms-flex-direction: row;
                flex-direction: row;
        /* flex-wrap: wrap; */
      }
      /*  -------------------------------  Custom Style   ---------------------------------------- */
      .span-color {
        color: #7ea4eb;
      }

      p {
        opacity: 0.9;
      }

      .show {
        opacity: 1;
        -webkit-transform: translate(0, 0);
                transform: translate(0, 0);
      }


      /* --------------------------------------- */

      #service {
        background-color: rgba(0,0,0,0.6);
        color: #fff;
      }

      #service h3 {
        text-align: center;
        font-size: 2rem;
        font-weight: 700;
        padding: 50px 0;
      }

      #service .static {
        background-color: #707070;
      }

      #service .row .content {
        padding: 50px 25px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
            -ms-flex-direction: column;
                flex-direction: column;
        -webkit-box-pack: center;
            -ms-flex-pack: center;
                justify-content: center;
        -webkit-transition: all ease-in-out 0.4s;
        transition: all ease-in-out 0.4s;
      }

      #service .row .content span i {
        border: 1px solid #fff;
        padding: 25px;
        font-size: 2.5rem;
        margin-bottom: 20px;
      }

      #service .row .content h5 {
        padding: 10px 0;
        color: #7ea4eb;
        font-size: 1.3rem;
      }

      #service .row .content p {
        line-height: 20px;
        font-weight: 300;
        font-size: 1rem;
        opacity: 0.9;
      }

      #service .row .content:hover {
        background-color: #aaa;
        color: #fff;
        /* border: #000 1px solid; */ */
      }
      #service .row .content:hover h5{
          color: #fff;
      }

    </style>
    <!-- /style -->

<?php
    include('home/footer.php');
?>