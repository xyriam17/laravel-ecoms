@extends('master')

@section('content')

    <style>
        .text-custom{
            color: #0062ff !important;
        }
        .work-desk {
            width: 100%; /* Ensure each image takes up the full width of its container */
            height: auto; /* Maintain aspect ratio */
            margin-bottom: 20px; /* Add some space between images */
        }
        .work-desk img {
            width: 100%; /* Make sure each image fills its container */
            height: 250px; /* Set a fixed height for all images */
            object-fit: cover; /* Ensure images maintain aspect ratio and cover their container */
        }
    </style>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center mb-4">Welcome to [Shop Name]</h2>
            <p class="text-center">Every sweet creation at [Shop Name] is a testament to our passion for baking and our commitment to the environment.</p>
            <p class="text-center">We believe that indulgence should never come at the cost of the planet. That's why we've dedicated ourselves to crafting delicious cakes and treats using only the finest organic, locally sourced ingredients. From our farm-fresh eggs to our handpicked fruits and artisanal chocolates, every ingredient is carefully selected to ensure the highest quality and minimal environmental impact.</p>
            <p class="text-center">But our dedication to sustainability doesn't stop there. We've taken significant steps to minimize waste throughout our production process, from composting organic scraps to using eco-friendly packaging materials. We strive to leave the smallest footprint possible while still delivering the big flavors and decadent experiences our customers love.</p>
            <p class="text-center">Beyond our commitment to the planet, [Shop Name] is also a celebration of creativity and craftsmanship. Our talented team of bakers and decorators pour their hearts into every cake, creating edible works of art that are as beautiful as they are delicious. Whether you're celebrating a birthday, wedding, or any special occasion, our cakes are sure to make every moment unforgettable.</p>
            <p class="text-center">We invite you to join us on our journey to redefine the way we enjoy sweets. With every bite, you're not just indulging in a treat – you're supporting a vision of a healthier, more sustainable future. Thank you for choosing [Shop Name], where every cake is a taste of our commitment to the planet and our love for baking.</p>
        </div>
    </div>
</div>

    


<div class="row align-items-center">
        <div class="col-lg-12 col-md-12">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="card work-desk rounded border-0 shadow-lg overflow-hidden">
                        <img src="uploads/kiddo.jpeg" class="img-fluid" alt="Image" />
                        <div class="img-overlay bg-dark"></div>
                        <div class="card-body">
                            <p>Drusila G. Otaza</p>
                            <p>Baker</p>
                            
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-4">
                    <div class="card work-desk rounded border-0 shadow-lg overflow-hidden">
                        <img src="uploads/mehey.jpeg" class="img-fluid" alt="Image" />
                        <div class="img-overlay bg-dark"></div>
                        <div class="card-body">
                            <p>Frietzzylyn Mhay T. Salarda</p>
                            
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-4">
                    <div class="card work-desk rounded border-0 shadow-lg overflow-hidden">
                        <img src="uploads/madam.jpg" class="img-fluid" alt="Image" />
                        <div class="img-overlay bg-dark"></div>
                        <div class="card-body">
                            <p>Merriam Mae A. Salas</p>
                           
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end col-->
    </div>
    <!--end row-->
    

@stop
