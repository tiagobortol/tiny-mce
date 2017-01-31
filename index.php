<html>
    <head>

        <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

    </head>
    <body>
        <h1>Testando o componente TinyMCE classic</h1>
        <form i="root" method="post">
            <textarea id="mytextarea" style="width: 100%; height: 70%">
                Espaço para digitação
            </textarea>
        </form> 
    </body>

    <script>
        tinymce.init({
            selector: '#mytextarea',
            init_instance_callback: function (editor) {
                editor.on('keypress', function (e) {
                    if (e.key === '$')
                    {
                       alert('Letra d detectada');
                    }
                });
            },
            plugins: ["table"
            ],
            toolbar1: "fullpage | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | formatselect fontselect fontsizeselect | cut copy paste | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink | forecolor backcolor",
            toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | spellchecker | visualchars visualblocks nonbreaking template"
        });

    </script>
</html>




