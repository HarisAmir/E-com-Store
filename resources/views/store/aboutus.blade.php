@extends('store.storeLayout') 
@section('content')
<style>
    .cust{
        display: flex;
    }
    .left {
      flex: 1;
      padding: 2%;
      padding-left: 0;
    }
    .right{
        flex: 1;
        padding: 2%;
    }
    .cust-icons{
        color: rgb(67, 149, 255);
        
        
    }
    
    .cust-icons i{
        cursor: pointer;
        padding-left: 30px;
    }
    .cust-icons i:nth-child(1){
        padding-left: 0;
    }
    .cust-icons i:hover{
        color: rgb(2, 59, 133);
    }
    @media only screen and (max-width: 768px) {
        .cust{
            flex-direction: column-reverse;
        }
        .right{
            padding-left: 0;
        }
    }
    
    </style>
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <!-- section title -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h1 class="title">About Us</h1>
                        <br><br><br>
                        <div class="cust">
                        <div class="left">
                            <img src="uploads/authors.png" alt="" style="width: 100%;">
                        </div>
                        <div class="right">
                            <h3 style="text-decoration: underline;">Haris Amir, Salman Nazir, Muhammad Alyan, Ahsan Ali</h3><br>
                            <p>Four individuals determined to bring about a change in this world using the lastest technologies and ideas and striving to make this world a better place to be.</p><br>
                            <p>Each of us is a specilist is his own domain which makes it even better for us to work as a team. Our team has been working for over 2 years now and has made some quality software during this period.</p>
                            <br>
                            <div class="cust-icons">
                                <i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i>
                                <i class="fa fa-github-square fa-3x" aria-hidden="true"></i>
                                <i class="fa fa-linkedin-square fa-3x" aria-hidden="true"></i>
                                <i class="fa fa-twitter-square fa-3x" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    </div>
                </div>
                <!-- /section title -->

                
                    
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
    </div>
@endsection