<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/price.css">
    <title>Document</title>
</head>

<body>

    <section class="h-100 h-custom" style="background-color: #d2c9ff;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12">
                    <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                        <div class="card-body p-0">
                            <div class="row g-0">
                                <div class="col-lg-8">
                                    <div class="p-5">
                                        <div class="d-flex justify-content-between align-items-center mb-5">
                                            <h1 class="fw-bold mb-0 text-black">Booking Ticket</h1>
                                            <h6 class="mb-0 text-muted">3 items</h6>
                                        </div>
                                        <hr class="my-4">

                                        <div class="row mb-4 d-flex justify-content-between align-items-center">
                                            <div class="col-md-2 col-lg-2 col-xl-2">
                                                <img src="./img/vip1.webp" class="img-fluid rounded-3"
                                                    alt="Cotton T-shirt">
                                            </div>
                                            <div class="col-md-3 col-lg-3 col-xl-3">
                                                <h6 class="text-muted">Ticket</h6>
                                                <h6 class="text-black mb-0">Gold Seats</h6>
                                            </div>
                                            <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                                <button class="btn btn-link px-2"
                                                    onclick="decrementQuantity('goldSeats')">
                                                    <i class="fas fa-minus"></i>
                                                </button>

                                                <input id="goldSeatsQuantity" min="0" name="quantity" value="1"
                                                    type="number" class="form-control form-control-sm" />

                                                <button class="btn btn-link px-2"
                                                    onclick="incrementQuantity('goldSeats')">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                            <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                <h6 class="mb-0">€ 44.00</h6>
                                            </div>
                                            <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                <a href="#!" class="text-muted" onclick="removeItem('goldSeats')"><i
                                                        class="fas fa-times"></i></a>
                                            </div>

                                            <hr class="my-4">

                                            <div class="row mb-4 d-flex justify-content-between align-items-center">
                                                <div class="col-md-2 col-lg-2 col-xl-2">
                                                    <img src="./img/vip2.jpg" class="img-fluid rounded-3"
                                                        alt="Cotton T-shirt">
                                                </div>
                                                <div class="col-md-3 col-lg-3 col-xl-3">
                                                    <h6 class="text-muted">Ticket</h6>
                                                    <h6 class="text-black mb-0">Platinum Seats</h6>
                                                </div>
                                                <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                                    <button class="btn btn-link px-2"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                        <i class="fas fa-minus"></i>
                                                    </button>

                                                    <input id="form1" min="0" name="quantity" value="1" type="number"
                                                        class="form-control form-control-sm" />

                                                    <button class="btn btn-link px-2"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                        <i class="fas fa-plus"></i>
                                                    </button>
                                                </div>
                                                <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                    <h6 class="mb-0">€ 44.00</h6>
                                                </div>
                                                <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                    <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                                                </div>
                                            </div>

                                            <hr class="my-4">

                                            <div class="row mb-4 d-flex justify-content-between align-items-center">
                                                <div class="col-md-2 col-lg-2 col-xl-2">
                                                    <img src="./img/vip5.jpeg" class="img-fluid rounded-3"
                                                        alt="Cotton T-shirt">
                                                </div>
                                                <div class="col-md-3 col-lg-3 col-xl-3">
                                                    <h6 class="text-muted">Ticket</h6>
                                                    <h6 class="text-black mb-0">Box Seats</h6>
                                                </div>
                                                <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                                    <button class="btn btn-link px-2"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                        <i class="fas fa-minus"></i>
                                                    </button>

                                                    <input id="form1" min="0" name="quantity" value="1" type="number"
                                                        class="form-control form-control-sm" />

                                                    <button class="btn btn-link px-2"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                        <i class="fas fa-plus"></i>
                                                    </button>
                                                </div>
                                                <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                    <h6 class="mb-0">€ 44.00</h6>
                                                </div>
                                                <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                    <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                                                </div>
                                            </div>

                                            <hr class="my-4">

                                            <div class="pt-5">
                                                <h6 class="mb-0"><a href="#!" class="text-body"><i
                                                            class="fas fa-long-arrow-alt-left me-2"></i>Back</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 bg-grey">
                                        <div class="p-5">
                                            <h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>




                                            <hr class="my-4">

                                            <!-- Add an id to your total price element -->
<div class="d-flex justify-content-between mb-5">
  <h5 class="">Total price</h5>
  <h5 id="totalPrice">€ 0.00</h5>
</div>

                                            <button type="button" class="btn btn-dark btn-block btn-lg"
                                                data-mdb-ripple-color="dark">Continue Booking</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</body>

</html>
<script>

    // Initialize cart array to store items
    const cart = [];

    // Function to add items to the cart
    function addToCart(name, price) {
        // Check if the item is already in the cart
        const existingItem = cart.find(item => item.name === name);

        if (existingItem) {
            // If item exists, increase quantity
            existingItem.quantity += 1;
        } else {
            // If item does not exist, add to cart with quantity 1
            cart.push({ name, price, quantity: 1 });
        }

        // Update the cart display and total price
        updateCart();
    }

    // Function to update the cart display and total price
    function updateCart() {
        const cartList = document.getElementById('cart');
        const totalPriceElement = document.getElementById('totalPrice');

        // Clear previous items
        cartList.innerHTML = '';

        // Display current items in the cart
        cart.forEach(item => {
            const listItem = document.createElement('li');
            listItem.textContent = `${item.name} - Quantity: ${item.quantity} - Total: €${(item.price * item.quantity).toFixed(2)}`;
            cartList.appendChild(listItem);
        });

        // Calculate and display the total price
        const totalPrice = cart.reduce((total, item) => total + item.price * item.quantity, 0);
        totalPriceElement.textContent = `€ ${totalPrice.toFixed(2)}`;
    }
    // Functions with modifications
    function decrementQuantity(ticketType) {
        const quantityInput = document.getElementById(ticketType + 'Quantity');
        quantityInput.stepDown();
        updateCart();
    }

    function incrementQuantity(ticketType) {
        const quantityInput = document.getElementById(ticketType + 'Quantity');
        quantityInput.stepUp();
        updateCart();
    }

    function removeItem(ticketType) {
        // Remove the item from the cart array based on ticket type
        const index = cart.findIndex(item => item.name.toLowerCase().replace(/\s+/g, '') === ticketType.toLowerCase());
        if (index !== -1) {
            cart.splice(index, 1);
            updateCart();
        }
    }
</script>