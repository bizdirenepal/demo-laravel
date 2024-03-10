<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
    <div class="container">
        <div class="row gy-3">
            <div class="col-lg-3 col-md-6 d-flex">
                <i class="bi bi-geo-alt icon"></i>
                <div>
                    <h4>Address</h4>
                    <p>{{$model->location}}</p>
                </div>

            </div>

            <div class="col-lg-3 col-md-6 footer-links d-flex">
                <i class="bi bi-telephone icon"></i>
                <div>
                    <h4>Reservations</h4>
                    <p>
                        <strong>Phone:</strong> {{$model->phone}}<br>
                        <strong>Email:</strong> {{$model->email}}<br>
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 footer-links d-flex">
                <i class="bi bi-clock icon"></i>
                <div>
                    <h4>Opening Hours</h4>
                    <p>
                        <strong>Sun-Fri: </strong>10AM - 05PM<br>
                        <strong>Saturday: </strong> Closed
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Follow Us</h4>
                <div class="social-links d-flex">
                    <a href="{{$model->links->twitter}}" target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="{{$model->links->facebook}}" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="{{$model->links->instagram}}" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="{{$model->links->linkedin}}" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>

        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>BizDire Nepal</span></strong>. All Rights Reserved
        </div>
        <div class="credits"> Powered By <a href="https://bizdirenepal.com/">BizDire Nepal</a>
        </div>
    </div>
</footer>
<!-- End Footer -->
