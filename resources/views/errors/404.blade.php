<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>404 error</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <section class="h-100 w-100 bg-white" style="box-sizing: border-box;">

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

            .empty-4-6 {
                padding: 2.5rem 2rem 5rem;
            }

            .empty-4-6 .main-img {
                object-fit: cover;
                object-position: center;
                margin-bottom: 0.5rem;
                width: 83.333333%;
            }

            .empty-4-6 .title-text {
                font: 600 1.875rem/2.25rem Poppins, sans-serif;
                color: #272E35;
                margin-bottom: 1.25rem;
            }

            .empty-4-6 .title-caption {
                color: #9C9C9C;
                margin-bottom: 4rem;
                letter-spacing: 0.025em;
                line-height: 1.75rem;
            }

            .empty-4-6 .btn-back {
                font: 600 1.125rem/1.75rem Poppins, sans-serif;
                background-color: #27C499;
                padding: 1rem 1.5rem;
                border-radius: 0.75rem;
            }

            .empty-4-6 .btn-back:hover {
                --tw-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            }

            @media(min-width: 425px) {
                .empty-4-6 .title-text {
                    font-size: 40px;
                }
            }

            @media (min-width: 576px) {
                .empty-4-6 {
                    padding: 3.5rem 2rem 4rem;
                }

                .empty-4-6 .main-img {
                    margin-bottom: 0.625rem;
                    width: auto;
                }
            }
        </style>

        <div class="empty-4-6 container mx-auto d-flex align-items-center justify-content-center flex-column"
            style="font-family: 'Poppins', sans-serif;">
            <img class="main-img img-fluid" style="max-width: 50%" src="{{ asset('img/404.png') }}" alt="">

            <div class="text-center w-100">
                <h1 class="title-text">
                    Opss! Something Missing
                </h1>
                <p class="title-caption mb-3">
                    The page you’re looking for isn’t found. We<br class="d-sm-block d-none"> suggest you Back to
                    Homepage.
                </p>
                <div class="d-flex justify-content-center">
                    <a href="/" style="text-decoration: none"><button
                            class="btn btn-back d-inline-flex text-white">
                            Back to Homepage
                        </button></a>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</body>

</html>
