<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="copyright" content="MACode ID, https://www.macodeid.com/">
    <?php
    @include('assets/link/Linkcss/cssLink.php')
    ?>
</head>

<body>
    <div class="vg-page ">
        <div class="container">
        <div class="ServicesBox badge badge-subhead text-center fw-normal wow fadeInUp">Services</div>
            <div class="wow fadeInUp row section-counter">
            @foreach($servicesAsome as $service)
                  <div class="conteinerCenter col-md-6 col-lg-3 py-4">
                <div class='developmentBox'>
                    <h5>{{$service[0]->category->cat_name}}</h5>
                    @foreach($service as $data)
                    <a href="{{url('subcats/'.$data->id.'/edit')}}"><span class="ti-angle-right icons"></span>{{$data->sub_cat_name}}</a>
                    @endforeach
                </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>


</body>

</html>