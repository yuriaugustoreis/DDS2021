//Remover REGIÃO ---------------------------------------------
$(function(){
    $(".remover").click(function(){
        //puxando o this de dentro do objeto
        id = $(this).val();
        //id_regiao abaixo manda informações para remover_regiao
        obj_json = {id_regiao: id}
        $.post("remover_regiao.php", obj_json, function(retorno){
            if(retorno == '1'){
                // "1" somente para controle
                $("#msg").html("Região removida com sucesso.");
                regiao = "#id_regiao" + id;
                $(regiao).remove();
                //apos a captura do evento (comeco do arquivo) e encaminhar informações
                //o remove retira o objeto sem que a página seja recarregada.
            }
        });
    });

    $(".alterar").click(function(){
        //puxando o this de dentro do objeto;
        id = $(this).val();
        nome_regiao = $("#nome_regiao"+id).html();
        input_regiao = "<input type='text' name='nome_regiao' value='" + nome_regiao + "'/>";
        $("#nome_regiao"+id).html(input_regiao);
        //escondendo o botão de alterar e exibindo o alterando.
        $(this).hide();
        $(".alterando[value='" + id + "']").show();
    });
    
    $(".alterando").click(function(){
        //puxando o this de dentro do objeto;
        id = $(this).val();
        botao = $(this);
        post_json = {
            id_regiao: id,
            nome_regiao: $("input[name='nome_regiao']").val()
        }
        //daqui manda as informações pro php - seguir e manter o padrão
        $.post("atualizar_regiao.php",post_json,function(resposta){
            console.log(resposta);
            if(resposta=='1'){
                $("#msg").html("Regiao alterada com sucesso");
                //nome_regiao tem que ser replicado dentro de todos os campos (se não o span não fecha quando alterado)
                nome_regiao = $("input[name='nome_regiao']").val();
                $("#nome_regiao"+id).html(nome_regiao);
                //hidden novamente... mostrando assim o botão de alterar (para re-fazer o processo)
                botao.hide();
                $(".alterar[value='" + id + "']").show();
            }
            });
        });
    });

//Remover PAÍS ---------------------------------------------

    //mudar nome do evento...
$(function(){
    $(".remover_pais").click(function(){
        //puxando o this de dentro do objeto(Dentro do span nomeando o botão)
        id = $(this).val();
        //nome_pais abaixo manda informações para remover_pais 
        //nesse caso utilizando o nome do pais por que o id existe mais que um
        //ou seja, se clicar em 1 botão ele apaga todos os id's do BD
        obj_json = {id_pais: id}
        $.post("remover_pais.php", obj_json, function(retorno){
            if(retorno == '1'){
                // "1" somente para controle
                $("#msg").html("Pais removido com sucesso.");
                pais = "#id_pais" + id;
                $(pais).remove();
                //apos a captura do evento (comeco do arquivo) e encaminhar informações
                //o remove retira o objeto sem que a página seja recarregada.
            }
        });
    });

    $(".alterar_pais").click(function(){
        //puxando o this de dentro do objeto;
        id = $(this).val();
        id_pais = $("#id_pais"+id).html();
        input_pais = "<input type='text' name='id_pais' value='" + id_pais + "'/>";
        $("#id_pais"+id).html(input_pais);

        nome_pais = $("#nome_pais"+id).html();
        input_nome = "<input type='text' name='nome_pais' value='" + nome_pais + "'/>";
        $("#nome_pais"+id).html(input_nome);

        //escondendo o botão de alterar e exibindo o alterando.
        $(this).hide();
        $(".alterando_pais[value='" + id + "']").show();
    });

    $(".alterando_pais").click(function(){
        //puxando o this de dentro do objeto;
        id = $(this).val();
        botao = $(this);
        post_json = {
            id_pais: id,
            id_pais: $("input[name='id_pais']").val(),
            nome_pais: $("input[name='nome_pais']").val()
        }
        //daqui manda as informações pro php - seguir e manter o padrão
        $.post("atualizar_pais.php",post_json,function(resposta){

            if(resposta=='1'){
                $("#msg").html("Pais alterado com sucesso");

                id_pais = $("input[name='id_pais']").val();
                $("#id_pais"+id).html(id_pais);
                nome_pais = $("input[name='nome_pais']").val();
                $("#nome_pais"+id).html(nome_pais);

                //hidden novamente... mostrando assim o botão de alterar (para re-fazer o processo)
                botao.hide();
                $(".alterar_pais[value='" + id + "']").show();
            }
            });
        });
    });

    //Remover LOCALIZAÇÃO ---------------------------------------------

    //mudar nome do evento...
$(function(){
    $(".remover_localizacao").click(function(){
        //puxando o this de dentro do objeto(Dentro do span nomeando o botão)
        id = $(this).val();
        obj_json = {id_pais: id}
        $.post("remover_pais.php", obj_json, function(retorno){
            if(retorno == '1'){
                $("#msg").html("Localização removida com sucesso.");
                pais = "#id_pais" + id;
                $(pais).remove();
                //apos a captura do evento (comeco do arquivo) e encaminhar informações
                //o remove retira o objeto sem que a página seja recarregada.
            }
        });
    });

    $(".alterar_localizacao").click(function(){
        //puxando o this de dentro do objeto;
        id = $(this).val();

        endereco = $("#id_endereco"+id).html();
        input_endereco = "<input type='text' name='id_endereco' value='" + endereco + "'/>";
        $("#id_endereco"+id).html(input_endereco);

        cep = $("#id_cep"+id).html();
        input_cep = "<input type='number' name='id_cep' value='" + cep + "'/>";
        $("#id_cep"+id).html(input_cep);

        cidade = $("#id_cidade"+id).html();
        input_nome = "<input type='text' name='id_cidade' value='" + cidade + "'/>";
        $("#id_cidade"+id).html(input_nome);

        estado = $("#id_estado"+id).html();
        input_estado = "<input type='text' name='id_estado' value='" + estado + "'/>";
        $("#id_estado"+id).html(input_estado);

        //escondendo o botão de alterar e exibindo o alterando.
        $(this).hide();
        $(".alterando_localizacao[value='" + id + "']").show();
    });

    $(".alterando_localizacao").click(function(){
        //puxando o this de dentro do objeto;
        id = $(this).val();
        botao = $(this);
        post_json = {
            id_pais: id,
            endereco: $("input[name='id_endereco']").val(),
            cep: $("input[name='id_cep']").val(),
            cidade: $("input[name='id_cidade']").val(),
            estado: $("input[name='id_estado']").val()
        }

        //daqui manda as informações pro php - seguir e manter o padrão
        $.post("atualizar_localizacao.php",post_json,function(resposta){
            if(resposta=='1'){
                $("#msg").html("Localização alterada com sucesso");

                endereco = $("input[name='id_endereco']").val();
                $("#id_endereco"+id).html(endereco);

                cep = $("input[name='id_cep']").val();
                $("#id_cep"+id).html(cep);

                cidade = $("input[name='id_cidade']").val();
                $("#id_cidade"+id).html(cidade);

                estado = $("input[name='id_estado']").val();
                $("#id_estado"+id).html(estado);

                //hidden novamente... mostrando assim o botão de alterar (para re-fazer o processo)
                botao.hide();
                $(".alterando_localizacao[value='" + id + "']").show();
             }
            });
    });
});


    //Remover DEPARTAMENTO ---------------------------------------------

    //mudar nome do evento...
$(function(){
    $(".remover_departamento").click(function(){
        //puxando o this de dentro do objeto(Dentro do span nomeando o botão)
        id = $(this).val();
        obj_json = {id_departamento: id}
        $.post("remover_departamento.php", obj_json, function(retorno){
            if(retorno == '1'){
                $("#msg").html("Departamento removido com sucesso.");
                departamento = "#id_departamento" + id;
                $(departamento).remove();
                //apos a captura do evento (comeco do arquivo) e encaminhar informações
                //o remove retira o objeto sem que a página seja recarregada.
            }
        });
    });

    $(".alterar_departamento").click(function(){
        //puxando o this de dentro do objeto;
        id = $(this).val();

        nome_departamento = $("#nome_departamento"+id).html();
        input_nome_dpto = "<input type='text' name='nome_departamento' value='" + nome_departamento + "'/>";
        $("#nome_departamento"+id).html(input_nome_dpto);

        //escondendo o botão de alterar e exibindo o alterando.
        $(this).hide();
        $(".alterando_departamento[value='" + id + "']").show();
    });

    $(".alterando_departamento").click(function(){
        //puxando o this de dentro do objeto;
        id = $(this).val();
        botao = $(this);
        post_json = {
            id_departamento: id,
            nome_departamento: $("input[name='nome_departamento']").val()
        }
        //daqui manda as informações pro php - seguir e manter o padrão
        $.post("atualizar_departamento.php",post_json,function(resposta){
            if(resposta=='1'){
                $("#msg").html("Departamento alterado com sucesso");

                nome_departamento = $("input[name='nome_departamento']").val();
                $("#nome_departamento"+id).html(nome_departamento);

                //hidden novamente... mostrando assim o botão de alterar (para re-fazer o processo)
                botao.hide();
                $(".alterando_departamento[value='" + id + "']").show();
             }
            });
    });
});

 //Remover FUNÇÃO ---------------------------------------------

    //mudar nome do evento...
$(function(){
    $(".remover_funcao").click(function(){
        //puxando o this de dentro do objeto(Dentro do span nomeando o botão)
        id = $(this).val();
        obj_json = {id_funcao: id}
        $.post("remover_funcao.php", obj_json, function(retorno){
            if(retorno == '1'){
                $("#msg").html("Função removida com sucesso.");
                funcao = "#id_funcao" + id;
                $(funcao).remove();
                //apos a captura do evento (comeco do arquivo) e encaminhar informações
                //o remove retira o objeto sem que a página seja recarregada.
            }
        });
    });

    $(".alterar_funcao").click(function(){
        //puxando o this de dentro do objeto;
        id = $(this).val();

        titulo_funcao = $("#titulo_funcao"+id).html();
        input_titulo_funcao = "<input type='text' name='titulo_funcao' value='" + titulo_funcao + "'/>";
        $("#titulo_funcao"+id).html(input_titulo_funcao);

        salario_min = $("#salario_minimo"+id).html();
        input_salario_min = "<input type='text' name='salario_minimo' value='" + salario_min + "'/>";
        $("#salario_minimo"+id).html(input_salario_min);

        salario_max = $("#salario_maximo"+id).html();
        input_salario_max = "<input type='text' name='salario_maximo' value='" + salario_max + "'/>";
        $("#salario_maximo"+id).html(input_salario_max);

        //escondendo o botão de alterar e exibindo o alterando.
        $(this).hide();
        $(".alterando_funcao[value='" + id + "']").show();
    });

    $(".alterando_funcao").click(function(){
        //puxando o this de dentro do objeto;
        id = $(this).val();
        botao = $(this);
        post_json = {
            //Dentro do JSON precisa estar exatamente igual pra quando for encaminhar pro POST
            //Se não, os valores não são puxados
            id_funcao: id,
            titulo_funcao: $("input[name='titulo_funcao']").val(),
            salario_minimo: $("input[name='salario_minimo']").val(),
            salario_maximo: $("input[name='salario_maximo']").val()
        }
        //daqui manda as informações pro php - seguir e manter o padrão
        $.post("atualizar_funcao.php",post_json,function(resposta){
            if(resposta=='1'){
                $("#msg").html("Função alterada com sucesso");
                titulo_funcao = $("input[name='titulo_funcao']").val();
                $("#titulo_funcao"+id).html(titulo_funcao);

                salario_minimo = $("input[name='salario_minimo']").val();
                $("#salario_minimo"+id).html(salario_minimo);

                salario_maximo = $("input[name='salario_maximo']").val();
                $("#salario_maximo"+id).html(salario_maximo);
                
                //hidden novamente... mostrando assim o botão de alterar (para re-fazer o processo)
                botao.hide();
                $(".alterando_funcao[value='" + id + "']").show();
             }
            });
    });
});

    //Remover FUNCIONARIO ---------------------------------------------

    //mudar nome do evento...
    $(function(){
        $(".remover_funcionario").click(function(){
            //puxando o this de dentro do objeto(Dentro do span nomeando o botão)
            id = $(this).val();
            obj_json = {id_funcionario: id}
            $.post("remover_funcionario.php", obj_json, function(retorno){
                if(retorno == '1'){
                    $("#msg").html("Funcionário removido com sucesso.");
                    funcionario = "#id_funcionario" + id;
                    $(funcionario).remove();
                    //apos a captura do evento (comeco do arquivo) e encaminhar informações
                    //o remove retira o objeto sem que a página seja recarregada.
                }
            });
    });

    $(".alterar_funcionario").click(function(){
        //puxando o this de dentro do objeto;
        id = $(this).val();

        nome = $("#nome"+id).html();
        input_nome = "<input type='text' name='nome' value='" + nome + "'/>";
        $("#titulo_funcao"+id).html(input_nome);

        sobrenome = $("#sobrenome"+id).html();
        input_sobrenome = "<input type='text' name='salario_minimo' value='" + sobrenome + "'/>";
        $("#sobrenome"+id).html(input_sobrenome);

        telefone = $("#telefone"+id).html();
        input_telefone = "<input type='text' name='telefone' value='" + telefone + "'/>";
        $("#telefone"+id).html(input_telefone);

        //escondendo o botão de alterar e exibindo o alterando.
        $(this).hide();
        $(".alterando_funcionario[value='" + id + "']").show();
    });

    $(".alterando_funcionario").click(function(){
        //puxando o this de dentro do objeto;
        id = $(this).val();
        botao = $(this);
        post_json = {
            //Dentro do JSON precisa estar exatamente igual pra quando for encaminhar pro POST
            //Se não, os valores não são puxados
            id_funcionario: id,
            nome: $("input[name='nome']").val(),
            sobrenome: $("input[name='sobrenome']").val(),
            telefone: $("input[name='telefone']").val()
        }
        //daqui manda as informações pro php - seguir e manter o padrão
        $.post("atualizar_funcionario.php",post_json,function(resposta){
            if(resposta=='1'){
                $("#msg").html("Função alterada com sucesso");

                nome = $("input[name='nome']").val();
                $("#nome"+id).html(nome);

                sobrenome = $("input[name='sobrenome']").val();
                $("#sobrenome"+id).html(sobrenome);

                telefone = $("input[name='telefone']").val();
                $("#telefone"+id).html(telefone);
                
                //hidden novamente... mostrando assim o botão de alterar (para re-fazer o processo)
                botao.hide();
                $(".alterando_funcionario[value='" + id + "']").show();
             }
            });
    });
});