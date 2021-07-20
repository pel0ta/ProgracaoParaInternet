$(document).ready(function(){
    $("#cpf").mask("999.999.999-99");

    $('#preco').mask("#.##0,00", {reverse: true, placeholder: "R$"});

    $("#formlogin").submit(function(e) {
        e.preventDefault();    
        var form = $("#form");
        var log = $("#login");
        $.ajax({
                type: 'POST',
                url: "operacoes/validalogin.php",
                data: new FormData(this),
                processData: false,
                contentType: false,
                success: function (data) {
                    if(data) {
                        log.val(data);
                        form.submit();
                    }
                    else {
                        $(".alert").addClass("show");
                    }
                }
            }
        );
    });

    $("#formcad").submit(function(event){
        event.preventDefault();
        
        $.ajax({
            type:"POST",
            url: $(this).attr("action"),
            data: new FormData(this),
            processData: false,
            contentType: false,
            success: function(data){
                if(data)
                    $(".alert").html("Cadastrado com sucesso").removeClass("alert-danger").addClass("alert-success").addClass("show");
                else
                    $(".alert").html("Não foi possível realizar o cadastro").removeClass("alert-success").addClass("alert-danger").addClass("show");
            }
        });
    });
});

function addCarrinho(form){
    let id = $(form[0][0]).val();
    let img = $(form[0][1]).val();
    let nome = $(form[0][2]).val();
    let valor = $(form[0][3]).val();

    $.ajax({
        type:"POST",
        url: "operacoes/addCarrinho.php",
        data: new FormData(form[0]),
        processData: false,
        contentType: false,
        success: function(data){
            $("#carrinho").removeAttr("hidden");
            $("#carrinho > span").html(data);

            if($(`div#car-${id}`).html()) {
                $(`p#p-${id}`).html(parseInt($(`p#p-${id}`).html()) + 1);
            }
            else
                $("#dropcar > .mr-4").append(`<div class="card m-2" id="car-${id}">
                                <div class="px-3 py-2 form-row align-items-center justify-content-center text-center">
                                    <img src="${img}" width="80px" height="100px">
    
                                    <div class="card-body">
                                            <h5 class="card-title">${nome}</h5>
    
                                            <p class="card-text">${valor}</p>
                                    </div>
    
                                    <div class="py-2" style="min-width: 30px">
                                        <span class="text-center align-middle">Qtd</span>

                                        <p class="pt-3 card-text text-center" id="p-${id}">1</p>
                                    </div>
                                </div>
                            </div>`);
        }
    });
}

function atualizaCar(id, acao, preco) {
    preco = parseFloat(preco);
    
    if(acao == "soma") {
        $.post("operacoes/addCarrinho.php", { id: id });
        $(`p#p-${id}`).html(parseInt($(`p#p-${id}`).html()) + 1);
        $(`#sub`).html((parseFloat($(`#sub`).html()) + preco).toFixed(2));
    }
    else {
        $(`p#p-${id}`).html(parseInt($(`p#p-${id}`).html()) - 1);
        if($(`p#p-${id}`).html() == "0") {
            if(confirm("Deseja realmente remover item?")) {
                $.post("operacoes/remCarrinho.php", { id: id });
                $(`p#p-${id}`).parent().parent().parent().remove();
                $(`#carrinho > span`).html(parseInt($(`#carrinho > span`).html()) - 1);
                $(`#sub`).html((parseFloat($(`#sub`).html()) - preco).toFixed(2));
            }
            else {
                $(`p#p-${id}`).html("1");
            }
        }
        else {
            $.post("operacoes/remCarrinho.php", { id: id });
            $(`#sub`).html((parseFloat($(`#sub`).html()) - preco).toFixed(2));
        }
    }
}

function dropCar() {
    $("#dropcar").dropdown('show');
}

function catchCar() {
    $("#dropcar").dropdown('hide');
}
