<!-- Remove the container if you want to extend the Footer to full width. -->
<div class="container-fluid" style="margin-top: 100px">

    <!-- Footer -->
    <footer
            class="text-center text-lg-start text-white"
            style="background-color: #1c2331"
    >
        <!-- Section: Social media -->
        <section
                class="d-flex justify-content-between p-4"
                style="background-color: #6351ce"
        >
            <!-- Left -->
            <div class="me-5">
                <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="" class="text-white me-4">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="fab fa-github"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold">Company name</h6>
                        <hr
                                class="mb-4 mt-0 d-inline-block mx-auto"
                                style="width: 60px; background-color: #7c4dff; height: 2px"
                        />
                        <p>
                            Here you can use rows and columns to organize your footer
                            content. Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Products</h6>
                        <hr
                                class="mb-4 mt-0 d-inline-block mx-auto"
                                style="width: 60px; background-color: #7c4dff; height: 2px"
                        />
                        <p>
                            <a href="#!" class="text-white">MDBootstrap</a>
                        </p>
                        <p>
                            <a href="#!" class="text-white">MDWordPress</a>
                        </p>
                        <p>
                            <a href="#!" class="text-white">BrandFlow</a>
                        </p>
                        <p>
                            <a href="#!" class="text-white">Bootstrap Angular</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Useful links</h6>
                        <hr
                                class="mb-4 mt-0 d-inline-block mx-auto"
                                style="width: 60px; background-color: #7c4dff; height: 2px"
                        />
                        <p>
                            <a href="#!" class="text-white">Your Account</a>
                        </p>
                        <p>
                            <a href="#!" class="text-white">Become an Affiliate</a>
                        </p>
                        <p>
                            <a href="#!" class="text-white">Shipping Rates</a>
                        </p>
                        <p>
                            <a href="#!" class="text-white">Help</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Contact</h6>
                        <hr
                                class="mb-4 mt-0 d-inline-block mx-auto"
                                style="width: 60px; background-color: #7c4dff; height: 2px"
                        />
                        <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
                        <p><i class="fas fa-envelope mr-3"></i> info@example.com</p>
                        <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                        <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div
                class="text-center p-3"
                style="background-color: rgba(0, 0, 0, 0.2)"
        >
            © 2024 Copyright:
            <a class="text-white" href="http://localhost:63342/cse311/index.php"
            >Ecommerce Site</a
            >
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->

</div>
<!-- End of .container -->

<script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.umd.min.js"
></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

<script>
    let username = document.querySelector('.username')
    let comment = document.querySelector('.comment')
    let comment_id = document.querySelector('.comment_id')
    let comment_section = document.querySelector('.comment-section')


    let message  = document.querySelector('.message-textarea');

    // For Cart
    let quantity = document.querySelector('.quantity')
    let name = document.querySelector('.name')
    let price = document.querySelector('.price')
    let image = document.querySelector('.image')



    var childWindow = "";
    var newTabUrl="http://localhost:63342/cse311/cart.php";

    function openNewTab(){
        childWindow = window.open(newTabUrl);
    }

    function refreshExistingTab(){
        childWindow.location.href=newTabUrl;
    }


    $(document).ready(function () {
        $('.submit').click(function () {
            if(!comment.value || !username.value) {
                alert('You Need To Login First')
            }
            else {
                $.ajax({
                    'type': 'POST',
                    'success': function (result) {
                        comment_section.insertAdjacentHTML('beforeend', `

                        <div class="col-md-11 col-lg-9 col-xl-7 comment-section">
                                <div class="d-flex flex-start mb-4">
                                    <img
                                        class="rounded-circle shadow-1-strong me-3"
                                        src="./images/user.jpg"
                                        alt="avatar"
                                        width="65"
                                        height="65"
                                    />
                                    <div class="card w-100">
                                        <div class="card-body p-4">
                                            <div class="">
                                                <h5>${username.value}</h5>
                                                <p>
                                                    ${comment.value}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    `)

                        username.value = '';
                        comment.value = '';

                    },
                    'data': {
                        username: username.value,
                        comment: comment.value,
                        comment_id: comment_id.value
                    }
                })

                return false
            }
        })


        $('.add').click(function () {
            $.ajax({
                'type': 'POST',
                'success': function (result) {
                    alert('Added To The Cart')
                    openNewTab()
                },
                'data': {
                    add: '',
                    quantity: quantity.value,
                    name: name.value,
                    price: price.value,
                    image: image.value
                }
            })

            return false
        })


        $('.contact-us').click(function () {
            $.ajax({
                'type': 'POST',
                'success': function (result) {
                    alert('Message Sent Successfully')
                    message.value = '';
                },
                'data': {
                    message: message.value,
                }
            })

            return false
        })

    })



</script>
</body>

</html>
