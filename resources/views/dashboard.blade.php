@extends('layout')

@section('content')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    You are Logged In
                </div>
            </div>
        </div>
    </div>


     <!-- Dashboard location Start -->

        <div class="service-location section-padding30">
            <div class="container">

                <div class="popular-location section-padding30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="single-location mb-30">
                            <div class="location-img">
                                <img src="https://media.istockphoto.com/photos/glass-of-water-lemon-and-ice-picture-id1293618957?b=1&k=20&m=1293618957&s=170667a&w=0&h=8efhFKE5jdGxHvsyd9Ytr3sDU0_kE0VRzA6nx41tqCs=" alt="" style = "height:190px; width:100 px;">
                            </div>
                            <div class="location-details">

                            <a href="{{ url('insert') }}" class="location-btn">Request approval</a>


                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="single-location mb-30">
                            <div class="location-img">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAATQAAACjCAMAAAAzSxLiAAABcVBMVEX87iEAAAD/+CL/9iL/8yL/////8iL/+SO2rBhtZw756yH/8CGTixNTTgvj1hPl2B7s3x9oYg5FR1dYUwv//iPHnW6jmhUxLwbIvRq4uLickxSonxawphcdJSu7k2eKiorZzRx1XEDAtRnUyBx7dBDVqHUhGhIoJgXFxsp4cACKghKBehFMSAr//5jNwhtUTwuyq04vLAZ1bw8jIQXp4oCJbkzSy2sPDQBBPQiCfT44NQdhXA2rq6uZmZnVtFVCgDPh4eEeHAQUEwMAABxdXV1tbW0tLS01Kh0TABwKAA5gTDXt4T2xqDxJSUlBQksAACZVV2YdIDh6en/q6uocHBxnaWxdSw9uXCVJOCqdhT4jFhwqHh0kFQAWAACAZEmohF1hXjXKq1FRUVGFcTR2dEMADQAbQxAsaRwmSR4YLhM/ejFSoD8yYCcSIQ5AKgyalVIYGSWZkzgXKxJZSyS0qzY6OSpqZj9HRSSJgzKVji0/PjWHEVMYAAASS0lEQVR4nO1dC3vb1nnGufgcEIAKMKQpmkRsGKQrlUShiJoqTpQrUfEljuO0s5POW7vZ25ouzdxtXZ0l3a/fueFCiiBBihQpGe/zyJYoCjh8z3f/PgCaVqBAgQIFChQoUKBAgQIFChQoUKBAgQIFChQoUKBAgQIFChQoUOBDATY1jaivAvmAa7ZJmuzL9QrW8gI3e4i4ZUT8PbTutVwfGABqhH1hUJCWG5CRRQH/31j3Uq4PMJMyCLAgrkA+mPY2NJ0h1BxGXoF8wLUOxm4XEb1X2LS8gNsegUFIYKVO1r2W6wKTayV3oBozawXyIdHOUqGdeYGCFkFMM1HZL7QzLyAgIkKDwCmyqNwAVEMqUiuQE5iRxgmDRWibH3CfRRx9Ztf2iogjN7Dbw0QvI1KvFN4zN0hRgyxQYJNhEoxRbmD8oasywQhqnt+0uqV8aHdqestBEOEP09sSDEmrVjoAC+C4VwsNivCHJXMEIa+xtQhfCfa7ugPRh6KsGBp+6XKERThq6w69+apKoKFXxj56UOpaY4jFqTHycqdX2Rkn7thqIXSDeSPI9AejKuZ6BoXcKaaBaPSGSnX0FwhC5ITN9vEocT1fgzcy5zcxbPVSH/SgUzey3CCO3rQ1od9iCqfbqpVHeBvoxo3jjUCncZ58xIrrUMhCrgygaaSpAzLmvOaI3FYYbzdITzGspz7edsN2nJ9EsOW/9k9ScGaTxsGEl4SdtJUb+ObNsG8mMmqJkL149OjRl59+FONX4Nfs31//Hfjoo/SLuUjjIJg6zXT00qsjdN3jEELtdvyBdn728hbD2aNbCZ6csH9egbPUS7fu5SdNEwJn6GlF7dj0Ops3ppeJFLS9qneRtFtfPXr8eJSzOUmTJxrh7bh5bc0bxnqSJu03ddftfHnCcO/Jbpqis7NRyhYhTRO8uSk9LdfhNcyzkNaIP8Gjk5OHKZyAtH4yfJwCWJA0jfPm1Lbjkx5ZzvUSN2b947AeNMCYJN36+uFuDHB7FGB39+sFSeP2jdqdRNwq/vVJ603odKN1H7jI+2ictF3Q/ZlCF9wfBfjNb/5+YdL4yRGqpwLfayJujLLYYW7rmmGUTm69GmMNYCpRdT47PHyafMb7h6//4Ze/vAxpmshwm0n4Ngg3PldIU/b06dN//Oyzz377u38CJ6OkvSw1FAb//OANSOHBm/1Lk8aAqZeEOgdNbaNjN5RQ9vrugxiHYBTP3v6NArh7+xA8AU+eqN/cfQD+ZQmk8fKA5iZeoWvTTdVSZHQTYn6awriknb39ucQvfnubkXYCTu48BPf+9eULxuH9f1sKaZoQt6RGsFXfSC3FWuIxmXW6m8Kbj3fvpPEwIu33hxFp4Oxk9w6TtNt3z5dFmrButWF0tOGatJQgIxvNEQ28n44jHvzu8b00XvxekfbNXU7ay5M7d04en7x8yEl7AJZHmiaykqTs2VmDL8Wtc5AXR4KsB4q1w3sj6vnlJ7+Q+Ib/Dvzh3//A/uIbYdNu3362VNJEXSqJ3creFRs34uWmjOHpmzevmWU7VDHrrVcPX52cSdv2CnyiAARpp9/+8fT0u/94d/qnVZDGYzfixjFI/2qNGzyeTE82Pj88/OlrLm0P/nP31Yuzr3dFxn7r4X8p7fz5nyRp77779rt37747/XY1pGlcS8NYSw9cfGW0kda8nEkcvf78/uHn93ZfnD0+k6T995+VoH0BbvN45N3pt6en/3P67vSP/OeEtD1KiLkk222iakpLG1flE7A1kZNFMDziEIwejf7m6dPX4C/RD/1Wy7Mdg2WUEEI5loAJmZNIk/DaOHTqjfIwdSLLMXifhk86rLJ7CoOlkTY3hsdBpdTuWDXXrwsiMYSKSNXLImmo5hVjhWp2S2/0Ji/9vD9oW00/tA1xrFXQB6+YqFk44ET2uh2rUWvquu77dQXf191mzer0BsGFPmkWhkGp0/RbDmHsLXPMxlglAxuDo6BkuXVbo7zBeOnoxHRA5SIGs5dxTRG0G75ncMG7hNyZ9nkVjoPOFbpdRwTtWt1eeLzLtIcXwya6t+4PdTXot5uhAedvqprezgXS5ssRrjsO2nz4YS5dJd72BdLgzTVpGQjm6w6SMBgf9zftdX+GdWCe+jnxL1wjAZc0nXfdsKPnlbaLl2Wazuzj31AMfZrLtuFmd4w01J199BuLvpPn2iRsWaOqbH4YKUIMy0nDBQ04W9hQ1x0Nbqud2Se6SeigkclDo79tzHQIqDTcHsXKlxn4+nzwV7ma8qg+mrQBvFkqisbHslePMsXzobrK1RzQMUZgC+gzasvzF7svjfK814HS2ce8BC7cEAk7oDbO5BhpK13QRGwYaRdv6kAMUJsqa3j2UZcNRVrkpExTm1HoXi1ppYv8MNbcaTu7hkhWkuY8V3rx/Dl5bq+RtEk3LCMOCLN9qLmGgoYgDdeATuSuBdW96bejWDFpnQmqiL0ptxUh9dUuaBIkac2YtEp1AKYmfSsmDTgTzo7c80wFxfqKFzQBkjQXvOdrNQVpzzSMomKgiZEYDzURJvKlVZO2P6maRiuTJFCS1ph9zAmotK1as9boLhTkxaRxnTSfC9KQXvl+4ItfOJ0g6DjYtP/3fTgQ0rgM0vo9seJOeVInK5hU9TaAnaGgC2TnJd3hPR3Zg6SO3579J6OQpOngi4Q0EICdvWcgIBoOAfjLDwCEyAPfg09FYnxZ0raaoh2gLvnTQms4/o6dCQM02O1niBoqTzjJFPR1Mnrhr0kQ9ue7nliQRkZJe1anEP8IetABXz2n1AZAYy7qvfQPlyLtqDZezCYoPRYYLaquUdmY561+k/9XzRI12J9nAf1WcqmNmQRXhHrzdGIkaf4Iae/5a/QHYPwVtKoQVkPg2uCtissvQ5qeGp9PrTg1qR5jp9yp6X7Y8mzb9lqtsJ5F2lzr0ZUMEwSh5jgObx+qV2j9aPbfK0SkfZKyaSJWwl+AsAL6HN+Dtg2iSt/ipFlqkIhgRAlfMVdTwYQJ7dnzGBmkmfkXMJAlE4I0vxOdr9/1VUcCmxckPguStDr48wXS3nPS/lbii8uTNrSFUTIRajUGalO3e64j1cWkzel/nkXaHKXtBpUi1RrvIAzqkjaaN3oRpLGous+PCBtCPXWhnm+B0QEtZlsQrTJHcEnSBmL+wExPTEocu0TQhmZ1kCaTln84zRebRsNJNnBHltZRzoPJNAr9AH7EkL4H0hF4FNG/sjyQOwKI0I89fFnSOmKXkTOxTVQTQQYxpo/SZJCWt74XijDByGqIBg7fOpwvJ5Okmc45+PTtx+D/wF61An4AQekrsM+OwVKUrfKnYMAkrX0Z0iwqNDNr+u68xaWAaFNrrpNJYxlgLtT58mGYemUnqAT7qZ99mpu1uMrR+OGrwDVKFrXKuBbsBDVuo7HT3T9gKm/aZRcvTlpXrMdJVQuPgspWungoAn7TmDakPZk0lK8hIKpLid3s1zw5fYftZuyCxM6iPJIb19P4QbCGMMuh1PeCTCSdMkujtIVJq4zu4bkVGrIF4iT3XNkSd3mbZtUzSMsV2w74Cmgk6CU7uT+LiWl8BVBbvCtHhnEFRcgjsSeRje3XkyEXk1+5oV4/5oEbnlKymExavmK3eKeSs21PtaH5hKf0TrZyDsLyotl3Z7oC0lokNcYThZdixcJjaWqj+8JnZ8dKGaTlWYHP1AQre9aNFMdpt7sN3xGbFwkhjxtyTBytnrQ2TPq3fR5emtwAtNttS5dVMqrEqyQ8bOZxJpOWpzEc0OSNTRFa2aUOkmfahhoXN6hMGV8RnTkJsnrSeKisBrDLvPeLnE4JKQHBGg/SsArRdDytPDaRtFzzQR5jhcpYg3NGDCbOR1B+kCZGlk5j1nhZYHa8XLo4ejkd87bwGkgUOTm4OTbF1L8GRVmhi7DL/VrkAAzGCxxmHGgiaXnqtlzQiFRO7saV+nlUbKTDz80naKCsy/GNW//QkRGrxjHiuyhCI1/arpAQ9plYvKNcK2+rYDfjQBNJy3x3CrzDRYW/ENN/WLpHq8qp6VPK3W/AqKJiH4/Q4pfALA08JlaxFC9kqw9ZqgrLi0S4e8AETO0zJ4ZkHGkyaTnCNBwLGtNTEytncyCWUINyu/ZwpJVc1OhCtzdcHrg9kSa3xunToAwxEDddbShFcJ9bPSGB/PEcWaXYRSWNHxOKaI4Jsml3IBHCBWz+pw6V0UZgRHvLk/AlXji0CI5iheNyb/SI8u51rgF1FWBsM5+lZMGIpeICMkKOmRG8H28bOwIzZH0HCYvaYOc5rso/b1KTRC6eL2a9+snTfOk6m1iDbTC0kQi5e1wXoHR9bO+51RGJp3Cgkw+VUU/D9nD6EjgJghomQ3JDfIr6fKt4tYgnbkObJScsmpTy2MxewhWBb7PcQEMZjRoVcRBbVq8qTG+LIiMkysPyCAhO7hBldVaIOdXZHdFI8Wo4mvouYcysAdsyh5+0h/gtro4hr/oD5UrnqqEvG+yTyqigAiN/sGVU2dJbRyDk217RKL+TTWyHUaZFye4X02kqOohlnZnXKBQe2ngIGoMt7nT8qleWx5dLOKfrHkDFEQd8m6MifFgNQK+7zZM8tyrT5TrRqCin2WZWiWxK3x9r2V04YSDEdyRtq5qGpUFoDwOtpcocOlbv0xZupi4H/FoSJLSHKWASaHdwx0DQ6O84tipSWFhDwisw9iYnf9Mvgc5uMjSw8gP8YiAirkkVmycKucTw44SfJVYy5Gb7to62fQz+SaVuiKTOCdUdnkW53tTCuN3IlEjurosz0hh9+oQ8oeFk2prRAQMo0l5Iq1Wj1SxJwUWJPWTmVNaZmBrnrgevAsKgCLUz4hWbnttzpFYlSsBEUkYmTI0nDk9tz8yRSfo2PgnSpJmeJe8kVKs11B95rus2BZjPkhSumzThDIVs8QwqXnFNkmba8YqZgEmV4No0qXKR52lEvDd3wZPGpPUj9yghom4NWV3dw1UqLwHcIEkTsb4xMkgmdQ27bdcjVUoh74hOk7TjSbNEk3lDntutpJoNaZuWcgSuLXqXsmu632u2jNjLcpuWI6VdGYL0ShIBqnmiJSCLMwelWshXLJWV+bAL5Z49P8flBAlv4rbQMThn0iuasQwf6LQDdAhRS3eG0VlYlhx7Tw3PWftZJvhuxt4zKrI2aQ1Y7Hd2TYttdwUl3lMzx49y2Uu24zhNBK19v+owOxtaQz1J5bj0SzUeTp+LvhpICWqomGJHpwb7CE0fsBXXqpErYL+WpYWVPElNhtXsHLgGKi1a5cq3VR0Cn62kpdJPEBVAN+KpgTIjYMEH+yao0yr/cciSgkabx7aejHhtFY6v5tGtcgnbTIQcjyJN5FI2MwINnkV51OHyx4Jgmb+5U6Loq4PKPU3NDCnCIizwWf7S41mUT03usfagyj1XtM3S3ntC9aUz6PFyWltslI2hxdentm0znhoI95RyMN9mi6Ctz1UiEH4gRHzshJubA2lYVrIEaVcHqVKZwbO2oCrcrENgyOQLioQz2IzHFKuchDfylCf3RBmwKkNJjOwGywf82HOtACrWaMURmCXLUsqmGiaJnfamPNNTFrAtFGWVJSrURa3fJiYTQjTk37dXZYRlgXbIuyZi4wgSdEV9MCN5y2YIGg+7FTuqY+tIsbJVN4AbEWit1p4oUeOtVVjn0aCseTqytMJtP5WFK38j3ICAWM8BkRMdHaRCN1mrt5L2d3t126w6wHzIBTs9pHQx5JsV8AuYpQDKvvJmQFk1XvMgWo9ZEPGjC9nL+zw5SGvJygBi1kwU+QMXeSxu4wUYN5H6TQGVFew9kRXHxhgZgc+HUZDKSleqGlGVriRvCUU81+p2QiKe40GiSu0GKSeHXNS+vJSf2Hqj0+G1GB45RaOu3dWqBlKnOQ/FDI54QKDkj3pquK+xKV5AgkRJeFNk0Px5QXJEzESGKt5WVr3iaNYK7LVonM4STL1oxM3aHIMmEc/0Heg4vmKE4GRwOVi9ZsC4nDa0QoPfz5EarUY8QjrjCuZ1ACcFn7bv8OIFJV4zvk5k7umlRYBGug/7xyMzvuFm6aYEMdJF/IPj7fQVIo2r2WViZrWtyrPvZbEWmDDrAott+8rKMdCe1IrutzZPNSOM3OI+xlHuezEtA4Ta44voXfV9s+cEMhpjY0z8IS1XuwZxpZG61PRgYIV48x+5hqHd7KkO7VbHX8/Tp8S9jDVDg9fmOcOi/0kMAy2h+l+gQIECBQoUKFCgQIECBQoU2Bj8P+U1vKPiEL0xAAAAAElFTkSuQmCC" alt=""  >
                            </div>


                            <div class="location-details">

                            <a href="{{ url('insert') }}" class="location-btn">Request approval</a>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="single-location mb-30">
                            <div class="location-img">
                                <img src="https://imagesvc.meredithcorp.io/v3/mm/image?q=85&c=sc&poi=face&w=2000&h=1000&url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F43%2F2020%2F08%2F20%2FGettyImages-1165807395-2000.jpg" alt="">
                            </div>
                            <div class="location-details">

                            <a href="{{ url('insert') }}" class="location-btn">Request approval</a>
                        </div>
                    </div>
                    </div>
                   </div>
				  </div>
                <!-- More Btn -->

            </div>
        </div>
		</div>



</div>
@endsection
