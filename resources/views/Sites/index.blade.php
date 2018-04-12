@extends('layouts.navbar')

@section('title','ZPAI 2018');

@section('info')
    <div class="container" style="padding: 2em; text-align: center; position: relative; left: -60%;">
        <span class="border" style="background-color: #111; color: #fff; padding: 18px; font-size: 25px; letter-spacing: 10px; position: absolute">SCROLL DOWN</span>
    </div>
@endsection

@section('content')
    <h3>News</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse luctus nec lorem nec accumsan. Suspendisse potenti. Praesent at interdum eros. Phasellus id sapien elit. Suspendisse a venenatis nisl, a tempus dolor. Ut porta a nibh at luctus. Etiam quis magna ut nibh aliquet ultricies. In hac habitasse platea dictumst. Donec in congue arcu. Suspendisse et libero vel lorem euismod venenatis non vitae nibh. Praesent commodo mauris eget erat fringilla, in convallis ligula sodales.</p>
    <p>Aenean sagittis volutpat nibh. Donec bibendum nulla et dui posuere feugiat. Aliquam sagittis tellus sit amet ultricies faucibus. Maecenas lorem nunc, pellentesque id condimentum quis, rutrum nec lorem. Phasellus sodales turpis tellus, at feugiat turpis vulputate eu. Vivamus finibus hendrerit est ut gravida. Duis in fringilla leo.</p>
    <p>Integer fermentum lacus sed metus tempor feugiat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas rhoncus elit non mi egestas auctor. Sed interdum id elit eu mattis. Integer lobortis malesuada dui. Quisque sed finibus neque, in fringilla mi. Donec feugiat faucibus gravida. Duis a euismod magna, vitae ornare libero. Pellentesque mattis, elit sollicitudin venenatis bibendum, quam ante cursus orci, non auctor est tellus at magna. Donec quis volutpat ligula, nec viverra lorem. Morbi mollis blandit condimentum. Nunc pulvinar ex sed magna ornare, a porta lorem luctus. Nulla sed turpis vel lectus lobortis porttitor id at elit. Curabitur imperdiet ligula vel quam molestie volutpat.</p>
    <p>Nam auctor lacus eu eros blandit pharetra. Vivamus suscipit ex elementum rhoncus semper. Quisque porta accumsan sollicitudin. Sed ac accumsan sem. Vivamus eu est ac arcu sodales venenatis. Nunc ac nibh iaculis, faucibus nisl in, sollicitudin tellus. Vestibulum lobortis, metus at suscipit sodales, sem libero eleifend lectus, ut imperdiet velit risus fermentum magna. Ut congue ex eget ligula commodo tempor. Morbi elementum felis non finibus posuere. Vivamus neque sem, feugiat vitae ipsum eu, dictum sagittis odio. Integer luctus blandit ligula eget tempor. Curabitur dapibus lorem dolor, eget sagittis urna malesuada sed. Donec vel orci viverra nisi suscipit ultrices. Praesent consectetur enim tellus, et auctor turpis malesuada posuere. Praesent sollicitudin, quam vitae molestie pretium, mi neque aliquam nulla, a iaculis dolor metus id dui.</p>
    <p>Nullam fringilla justo quis ligula ultricies sodales. Vivamus ut facilisis nulla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Curabitur dignissim diam nunc, at elementum nisi commodo non. Integer enim justo, mollis at pharetra quis, ultrices vitae felis. Nunc et felis a ante ultricies congue et sed ligula. Etiam egestas lacus sit amet convallis sollicitudin. Nunc in accumsan sem. In ac malesuada nunc.</p>
@endsection

@section('content2')
    <h3>About</h3>
    <div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas lacus risus, maximus id lectus non, rhoncus maximus lectus. Proin eu neque ornare, tincidunt purus et, dapibus lacus. Ut iaculis tempor dignissim. Vivamus quis tortor est. Suspendisse a feugiat magna. Suspendisse vel consectetur neque, eu varius mi. Proin id sodales nunc, eget tempor lacus. Sed congue est non tellus faucibus, non facilisis turpis convallis.</p>
        <div style="text-align: center"><img src="images/about.jpg" width="50%"></div>
    </div>
@endsection

@section('content3')
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h1>Contact Us</h1>
                <p class="lead">Have a question or want further information?</p>
                <p>Fill in the short form and we will get back to you as soon as possible.</p> <br>
                <div class="form-group">
                    <div class="col-sm-6">
                        <div class="input-group" style="margin: 5px">
                            <div class="input-group-addon">
                                <i class="fa fa-user"></i>
                            </div>
                            <input type="text" class="form-control" id="exampleInputFirstName" placeholder="Enter first name" name="C_FirstName" data-bv-field="C_FirstName"> <br>
                        </div>
                        <small data-bv-validator="notEmpty" data-bv-validator-for="C_FirstName" class="help-block" style="display: none;">Required</small>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-group" style="margin: 5px">
                            <div class="input-group-addon">
                                <i class="fa fa-user"></i>
                            </div>
                            <input type="text" class="form-control" id="exampleInputLastName" placeholder="Enter last name" name="C_LastName" data-bv-field="C_LastName"> <br>
                        </div>
                        <small data-bv-validator="notEmpty" data-bv-validator-for="C_LastName" class="help-block" style="display: none;">Required</small>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-6">
                        <div class="input-group" style="margin: 5px">
                            <div class="input-group-addon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="C_EmailAddress" data-bv-field="C_EmailAddress">
                        </div>
                        <small data-bv-validator="notEmpty" data-bv-validator-for="C_EmailAddress" class="help-block" style="display: none;">Required</small>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-group" style="margin: 5px">
                            <div class="input-group-addon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <input type="text" class="form-control" id="C_BusPhone" placeholder="Phone" name="C_BusPhone">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <div class="input-group" style="margin: 5px">
                            <div class="input-group-addon">
                                <i class="fa fa-comment fa-2"></i>
                            </div>
                            <textarea class="form-control" name="Comments" id="Comments" rows="5" style="width:99.9%" placeholder="Enter your message here"></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12" style="text-align: right; margin: 5px;">
                        <button id="contacts-submit" type="submit" class="btn">Send</button>
                    </div>
                </div>
                <input type="hidden" value=""></form>
            </div><!-- end panel-body -->
        </div><!-- end panel -->
        <!-- END DOWNLOAD PANEL -->
    </div><!-- end col-md-8 -->
    <div class="col-md-2"> </div>
@endsection

@section('content4')
    <h3>All products</h3>

    @foreach($products as $product)
        <div>
            <button class="accordion">{{$product->title}}</button>
            <div class="panel">
                <p>{{$product->description}}</p>
                <a class="example-image-link" href="/images/{{$product->img}}.jpg" data-lightbox="set"><img class="example-image" src="images/{{$product->img}}.jpg" alt="image-1" height="200" border="2"/></a>
            </div>
        </div>
    @endforeach

@endsection