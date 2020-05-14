<?php
        include('home/header.php');
?>

<style>
*{
    box-sizing: border-box;
    padding:0;
    margin:0;
    overflow-x: hidden;
}
body{
    font-family: tahoma;
}
</style>

<section class="py-5">
    <div class="container">
        <div class="row ">

            <!-- read more -->
            <div class="col-12 bg-white col-md-6 py-5">
                <div class="py-5">
                    <p class="px-5 pt-5">
                        هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                    </p>

                    <div class="px-5">
                        <button class="btn btn-primary text-white">
                        اقرا المزيد
                        </button>
                    </div>
                
                </div>
            </div>
            <!-- /read more -->

            <!-- image -->
            <div class=" col-12 col-md-6">
                <img src="images/about/undraw_teaching.svg" class="w-100 h-100" alt="">
            </div>
            <!-- /image -->

    
        </div>
    </div>
</section>

<?php 
    include('home/footer.php');
?>