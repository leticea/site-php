<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/resources/trix/trix.css">
    <link rel="stylesheet" href="/resources/pnotify/pnotify.custom.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://kit.fontawesome.com/35b38b060a.js" crossorigin="anonymous"></script>
    <title>Painel Administrativo</title>
</head>
<body class="d-flex flex-column">
    <div id="header">
        <nav class="navbar navbar-dark bg-dark">
            <span>
                <a href="/admin" class="navbar-brand">Admin</a>
                <span class="navbar-text">
                    Painel Administrativo
                </span>
            </span>
            <a href="/admin/auth/login" class="btn btn-danger"><i class="fa-solid fa-right-from-bracket"></i></a>
        </nav>
    </div>
    <div id="main">
        <div class="row">
            <div class="col">
                <ul id="main-menu" class="nav flex-column nav-pills bg-secondary text-white p-2">
                    <li class="nav-item">
                        <span href="" class="nav-link text-white-50"><small>MENU</small></span>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/pages" class="nav-link<?php if (resolve('/admin/pages.*')): ?> active<?php endif; ?>"><i class="fa-solid fa-file-lines"></i> Páginas</a>
                    </li>
                    <li class="nav-item">                        
                        <a href="/admin/users" class="nav-link <?php if (resolve('/admin/users.*')): ?> active<?php endif; ?>"><i class="fa-solid fa-user"></i> Usuários</a>
                    </li>                    
                </ul>
            </div>
            <div id="content" class="col-10">
                <?php include $content ?>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/resources/trix/trix.js"></script>
    <script src="/resources/pnotify/pnotify.custom.min.js"></script>

    <script>
        document.addEventListener('trix-attachment-add', function() {

            const attachment = event.attachment;

            if (!attachment.file) {
                return;
            }

            const form = new FormData();
            form.append('file', attachment.file);

            $.ajax({
                url: '/admin/upload/image',
                method: 'POST',
                data: form,
                contentType: false,
                processData: false,
                xhr: function () {
                    const xhr = $.ajaxSettings.xhr();
                    xhr.upload.addEventListener('progress', function (e) {
                        let progress = e.loaded / e.total * 100;
                        attachment.setUploadProgress(progress);
                    });

                    return xhr;
                }
            }).done(function (response) {

                console.log(response);
                attachment.setAttributes({
                    url: response,
                    href: response
                });
                
            }).fail(function () {
                console.log('deu ruim');
            });
        });

        <?php flash(); ?>
        
        const confirmEl = document.querySelector('.confirm');

        if (confirmEl) {

            confirmEl.addEventListener('click', function(e) {
                e.preventDefault();
                if (confirm('Tem certeza que deseja fazer isso?')) {
                    window.location = e.target.getAttribute('href');
                }
            });
        }
    </script>
</body>
</html>