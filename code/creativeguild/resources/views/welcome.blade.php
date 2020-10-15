<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Creative Guild</title>

        <!-- Fonts
            creativeguild
            ev21dl43@
        -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/creativeguild.css') }}" rel="stylesheet" type="text/css" >

    </head>
    <body>
        <div class="container">
            <div class="profile-details">
                <span class="profile-pic">
                    <img src="{{ asset($leads['profile_picture']) }}" alt="profile pic" width="110px" >
                </span>
                <span class="username">{{ $leads['name'] }}</span>
                <span class="bio-title">Bio</span>
                <span class="bio">
                    {{ $leads['bio'] }}
                </span>
                <span class="p-title">Phone</span>
                <span class="phone">{{ $leads['phone'] }}</span>
                <span class="e-title">Email</span>
                <span class="email">{{ $leads['email'] }}</span>
            </div>

            @foreach ($leads['album'] as $sites)
            <div class="column">
                <div class="p-6">
                        <span class="img">
                            <img src="{{ asset($sites['img']) }}" alt="{ asset($sites['title']) }}" width="270px">
                        </span>
                        <span class="title">
                            {{$sites['title']}}
                        </span>
                        <div class="details">
                            <span class="description">
                             {{$sites['description']}}
                            </span>
                            <span class="date">{{$sites['date']}}</span>
                            @if ($sites['featured'] == 'true')
                            <span class="feature"><i class="fa fa-heart" style="font-size:14px;color:#e25342"></i></span>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
        </div>
    </body>
</html>
