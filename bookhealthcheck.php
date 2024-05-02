<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Checkup Shop</title>
    <link rel="stylesheet" href="hospital.php">
    <link rel="icon" type="image/x-icon" href="logo.jpg" >
   <style>

body{
    /* background-image:url("background3.jpg"); */
    background-color:aliceblue;
    /* background-blend-mode:overlay; */
    background-size:contain;
   

}
h2{
    text-align:center;
}

nav{
    background-color:white;
    position:sticky;
    top:0px;
  padding:30px;
    height:20px;
    width:100%;
    box-shadow: 0px 2px 8px rgba(0,0,0,25%);
}
nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    text-align: center;
}

nav ul li {
    display: inline;
    margin: 0 10px;
}

nav ul li a {
    text-decoration: none;
    color: #333;
    padding: 5px 10px;
    border-radius: 5px;
    transition: background-color 0.3s;
}

nav ul li a:hover {
    background-color: #f0f0f0;
}

main {
    padding: 20px;
}

.featured {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    grid-gap: 50px;
}

/* .package1{
   
    background-image: url('full boy check up.avif');
    height:500px;
    width:500px;
}
.package2{
    background-image: url('covid picture.jpg');
    height:500px;
    width:500px;
}

.package3{
    background-image: url('abroad.jpg');
    height:500px;
    width:500px;
}

.package4{
    background-image: url('5sense.avif');
    height:500px;
    width:500px;
} */

.package {
    border: 1px solid #ccc;
    padding: 10px;
    border-radius: 5px;
}
#cart{
  
    border: 1px solid #ccc;
    padding: 10px;
    border-radius: 5px;
    box-shadow: 0px 2px 8px rgba(0,0,0,25%);

}



.package h3 {
    margin-top: 0;
}

.package1 p {
    margin-bottom: 10px;
}

button {
    background-color: blue;
    color: white;
    border: none;
    padding: 5px 10px;
    border-radius: 3px;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}

/* footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 10px;
    position: fixed;
    bottom: 0;
    width: 100%;
} */
</style>
</head>
<body>

    <nav>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="#">Full Body Checkup</a></li>
            <li><a href="#">COVID-19 Checkup</a></li>
            <li><a href="#">Abroad Package</a></li>
            <li><a href="#">5-Sense Checkup</a></li>
        </ul>
    </nav>
    <h2>Featured Packages</h2>
    <main>
        <section class="featured">
        
            
            <div class="package">
                <p>$1000</p>
                <h3>Full Body Checkup</h3>
                <p>Comprehensive health assessment covering all major organs and systems.</p>
                <button>View Details</button>
                <button onclick="addToCart('full body checkup',1000)">ADD TO CART </button>
            </div>
            <div class="package">
            <p>$300</p>
                <h3>COVID-19 Checkup</h3>
                <p>PCR test and antibody screening for COVID-19 infection.</p>
                <button>View Details</button>
                <button onclick="addToCart('covid-19 checkup',300)">ADD TO CART </button>
            </div>
            <div class="package">
            <p>$500</p>
                <h3>Abroad Package</h3>
                <p>Pre-travel health checkup including necessary vaccinations.</p>
                <button>View Details</button>
                <button onclick="addToCart('abroad package',500)">ADD TO CART </button>
            </div>
            <div class="package">
            <p>$700</p>
                <h3>Sense Organ Checkup</h3>
                <p>Assessment of vision, hearing, taste, smell, and touch.</p>
                <button>View Details</button>
                <button onclick="addToCart('sense organ checkup',700)">ADD TO CART </button>
            </div>
           
      
            <div id="cart">
            <h2>Package Booking</h2>
            <ul id="cart-items">
                <!-- Cart items will be displayed here -->
            </ul>
            <p>Total: <span id="total-price">$0</span></p>
            <button onclick="checkout()">Checkout</button>
        </div>
        </section>
      
    </main>
    <script src="script.js"></script>
</body>
</html>


