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


    // For Cart
    let quantity = document.querySelector('.quantity')
    let name = document.querySelector('.name')
    let price = document.querySelector('.price')
    let image = document.querySelector('.image')


    var childWindow = "";
    var newTabUrl="http://localhost:63342/Shop1/cart.php";

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

    })



</script>
</body>

</html>
