<footer>
    <div class="container">
        <div class="row">
            <div class="col s4 disc">
                <h2>MovieApp</h2>
                <p>احدث الافلام و المسلسلات الاجنبية</p>
                <a href="">برمجة و تصميم عمر جقميرة</a>
            </div>
            <div class="col s4 tags">
                <h2>الاصناف</h2>
                <label>مسلسلات</label>
                <label>مسلسلات</label>
                <label>مسلسلات</label>
                <label>مسلسلات</label>
                <label>مسلسلات</label>
                <label>مسلسلات</label>
                <label>مسلسلات</label>
                <label>مسلسلات</label>
            </div>
            <div class="col s4 links">
                <h2>روابط هامة</h2>
                <ul>
                    <li><a href="">التسجيل</a></li>
                    <li><a href="">الدخول للموقع</a></li>
                    <li><a href="">لائحة الافلام</a></li>
                    <li><a href="">تواصل معنا</a></li>
                </ul>
            </div>

        </div>
    </div>
</footer>
<?php echo 'footer'?>
<?php wp_footer(); ?>
<script>
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
            items:5,
            loop:true,
            autoplay:true
        });
    });
</script>

</body>
</html>