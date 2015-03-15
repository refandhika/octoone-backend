<?php

return [
    'auth' => [
        'title' => 'Área de Administração'
    ],
    'field' => [
        'invalid_type' => 'Tipo de campo inválido utilizado :type.',
        'options_method_not_exists' => 'A classe do modelo :model deve definir um método :method() retornando opções pro campo ":field".',
    ],
    'widget' => [
        'not_registered' => "Uma classe de widget com o nome ':name' não foi definida",
        'not_bound' => "Um widget cuja classe se chama ':name' não foi indexado ao controlador",
    ],
    'page' => [
        'untitled' => "Sem Título",
        'access_denied' => [
            'label' => "Acesso negado",
            'help' => "Você não tem as permissões necessárias para visualizar esta página.",
            'cms_link' => "Voltar à área de administração",
        ],
    ],
    'partial' => [
        'not_found_name' => "O bloco ':name' não foi encontrado.",
    ],
    'account' => [
        'sign_out' => 'Sair',
        'login' => 'Entrar',
        'reset' => 'Redefinir',
        'restore' => 'Restaurar',
        'login_placeholder' => 'usuário',
        'password_placeholder' => 'senha',
        'forgot_password' => "Esqueceu sua senha?",
        'enter_email' => "Digite seu email",
        'enter_login' => "Digite seu nome de usuário",
        'email_placeholder' => "e-mail",
        'enter_new_password' => "Digite uma nova senha",
        'password_reset' => "Redefinir sua senha",
        'restore_success' => "Um email com instruções para redfinir sua senha foram enviados para o seu email.",
        'restore_error' => "O usuário ':login' não foi encontrado",
        'reset_success' => "Sua senha foi redefinida com sucesso. Você já pode fazer o login.",
        'reset_error' => "Erro ao redefinir sua senha. Por favor, tente de novo.",
        'reset_fail' => "Falha ao redefinir sua senha!",
        'apply' => 'Aplicar',
        'cancel' => 'Cancelar',
        'delete' => 'Excluir',
        'ok' => 'OK',
    ],
    'dashboard' => [
        'menu_label' => 'Painel',
        'widget_label' => 'Widget',
        'widget_width' => 'Largura',
        'full_width' => 'Largura completa',
        'add_widget' => 'Adicionar widget',
        'widget_inspector_title' => 'Configurações do widget',
        'widget_inspector_description' => 'Relatório de configurações do widget',
        'widget_columns_label' => 'Largura de :columns',
        'widget_columns_description' => 'Largura do widget, um número entre 1 e 10.',
        'widget_columns_error' => 'Por favor, entre com a largura do widget. Deve ser um número entre 1 e 10.',
        'columns' => '{1} coluna|[2,Inf] colunas',
        'widget_new_row_label' => 'Forçar uma nova linha',
        'widget_new_row_description' => 'Colocar o widget em uma nova linha.',
        'widget_title_label' => 'Título do widget',
        'widget_title_error' => 'O título do widget é necessário.',
        'status' => [
            'widget_title_default' => 'Condição do Sistema',
            'online' => 'online',
            'maintenance' => 'em manutenção',
            'update_available' => '{0} atualizações disponíveis!|{1} atualização disponível!|[2,Inf] atualizações disponíveis!',
        ]
    ],
    'user' => [
        'name' => 'Administrador',
        'menu_label' => 'Administratores',
        'menu_description' => 'Gerenciar administradores, grupos e permissões.',
        'list_title' => 'Gerenciar administradores',
        'new' => 'Novo administrador',
        'login' => "Usuário",
        'first_name' => "Nome",
        'last_name' => "Sobrenome",
        'full_name' => "Nome Completo",
        'email' => "E-mail",
        'groups' => "Grupos",
        'groups_comment' => "Defina a quais grupos essa pessoa pertence.",
        'avatar' => "Foto",
        'password' => "Senha",
        'password_confirmation' => "Confirme a senha",
        'permissions' => 'Permissões',
        'superuser' => "Super Usuário",
        'superuser_comment' => "Marque essa caixa para liberar o acesso completo para este usuário.",
        'send_invite' => 'Enviar convite por e-mail',
        'send_invite_comment' => 'Marque esta caixa para enviar um convite por e-mail',
        'delete_confirm' => 'Você realmente quer apagar este administrador?',
        'return' => 'Retornar à lista de administradores',
        'allow' => 'Permitir',
        'inherit' => 'Herdar',
        'deny' => 'Negar',
        'group' => [
            'name' => 'Grupo',
            'name_field' => 'Nome',
            'description_field' => 'Descrição',
            'is_new_user_default_field' => 'Adicionar novos administradores para este grupo por padrão',
            'code_field' => 'Código',
            'code_comment' => 'Insira um código único, se você quiser acessá-lo com a API.',
            'menu_label' => 'Grupos',
            'list_title' => 'Gerenciar grupos',
            'new' => 'Novo grupo administrador',
            'delete_confirm' => 'Você realmente deseja excluir este grupo de administradores?',
            'return' => 'Voltar para a lista de grupos de administradores',
        ],
        'preferences' => [
            'not_authenticated' => 'Nenhum usuário autenticado pra carregar as preferências.'
        ]
    ],
    'list' => [
        'default_title' => 'Lista',
        'search_prompt' => 'Buscar...',
        'no_records' => 'Nenhum registro encontrado.',
        'missing_model' => 'Lista usado em :class não tem um modelo definido.',
        'missing_column' => 'Não existe definição de coluna para :columns.',
        'missing_columns' => 'Lista utilizada em :class não possui colunas de lista definidas.',
        'missing_definition' => "Lista não possui uma coluna para o campo ':field'.",
        'behavior_not_ready' => 'Lista não foi inicializada. Confira se você chamou makeLists() no seu controlador.',
        'invalid_column_datetime' => "Valor da coluna ':column' não é um objeto DateTime, você esqueceu da referência de \$dates no modelo?",
        'pagination' => 'Registros exibidos: :from-:to de :total',
        'prev_page' => 'Anterior',
        'next_page' => 'Próxima',
        'loading' => 'Carregando...',
        'setup_title' => 'Configuração da Lista',
        'setup_help' => 'Utilize as caixas para selecionar as colunas que deseja ver na lista. Você pode alterar as posições das colunas arrastando-as para cima ou para baixo.',
        'records_per_page' => 'Registros por página',
        'records_per_page_help' => 'Selecione o número de registros por página a serem exibidos. Mas, atenção! Números elevados podem prejudicar a performance do sistema.',
        'delete_selected' => 'Deletar selecionado',
        'delete_selected_empty' => 'Não há registros selecionados para excluir.',
        'delete_selected_confirm' => 'Excluir os registros selecionados?',
        'delete_selected_success' => 'Registros selecionados excluidos com sucesso.',
    ],
    'fileupload' => [
        'attachment' => 'Anexo',
        'help' => 'Adicione um título e descrição a este anexo.',
        'title_label' => 'Título',
        'description_label' => 'Descrição'
    ],
    'form' => [
        'create_title' => "Novo :name",
        'update_title' => "Editar :name",
        'preview_title' => "Visualizar :name",
        'create_success' => ':name foi criado com sucesso',
        'update_success' => ':name foi atualizado com sucesso',
        'delete_success' => ':name foi apagado com sucesso',
        'missing_id' => "ID do registro não especificado",
        'missing_model' => 'Formulário utilizado na classe :class não tem um modelo definido.',
        'missing_definition' => "Formulário não contém um campo ':field'.",
        'not_found' => 'Nenhum registro encontrado com o ID :id',
        'action_confirm' => 'Você tem certeza?',
        'create' => 'Criar',
        'create_and_close' => 'Criar e sair',
        'creating' => 'Criando...',
        'creating_name' => 'Criando :name...',
        'save' => 'Salvar',
        'save_and_close' => 'Salvar e fechar',
        'saving' => 'Salvando...',
        'saving_name' => 'Salvando :name...',
        'delete' => 'Apagar',
        'deleting' => 'Apagando...',
        'deleting_name' => 'Apagando :name...',
        'reset_default' => 'Redefinir para o padrão',
        'resetting' => 'Redefinindo',
        'resetting_name' => 'Redefinindo :name',
        'undefined_tab' => 'Outros',
        'field_off' => 'Desligado',
        'field_on' => 'Ligado',
        'add' => 'Adicionar',
        'apply' => 'Aplicar',
        'cancel' => 'Cancelar',
        'close' => 'Fechar',
        'confirm' => 'Confirmar',
        'reload' => 'Recarregar',
        'ok' => 'Ok',
        'or' => 'ou',
        'confirm_tab_close' => 'Tem certeza que deseja fechar essa aba? As alterações que não foram salvas serão perdidas',
        'behavior_not_ready' => 'O formulário não foi inicializado. Confira se você chamou initForm() no seu controlador.',
        'preview_no_files_message' => 'Os arquivos não foram carregados',
        'select' => 'Selecionar',
        'select_all' => 'todos',
        'select_none' => 'nenhum',
        'select_placeholder' => 'por favor, selecione',
        'insert_row' => 'Inserir linha',
        'delete_row' => 'Excluir linha',
        'concurrency_file_changed_title' => 'O arquivo foi alterado',
        'concurrency_file_changed_description' => "O arquivo que você está editando foi alterado por outro usuário. Você pode recarregar o arquivo e perder suas alterações ou substituir o arquivo."
    ],
    'relation' => [
        'missing_config' => "Comportamento de relação não tem qualquer configuração ':config'.",
        'missing_definition' => "Relacionamento não contém uma definição para ':field'.",
        'missing_model' => "Relacionamento utilizado na classe :class não possui um modelo definido.",
        'invalid_action_single' => "Essa ação não pode ser realizada num relacionamento singular.",
        'invalid_action_multi' => "Essa ação não pode ser realizada num relacionamento múltiplo.",
        'help'  => "Clique em um item para adicionar",
        'related_data' => "Dados do :name relacionados",
        'add' => "Adicionar",
        'add_selected' => "Adicionar seleção",
        'add_a_new' => "Adicionar um(a) novo(a) :name",
        'link_selected' => "Vincular selecionado",
        'link_a_new' => "Vincular um novo :name",
        'cancel' => "Cancelar",
        'close' => "Fechar",
        'add_name' => "Adicionar :name",
        'create' => "Criar",
        'create_name' => "Criar :name",
        'update' => "Atualizar",
        'update_name' => "Atualizar :name",
        'preview' => "Visualizar",
        'preview_name' => "Visualizar :name",
        'remove' => "Remover",
        'remove_name' => "Remover :name",
        'delete' => "Excluir",
        'delete_name' => "Excluir :name",
        'delete_confirm' => "Você tem certeza?",
        'link' => "Vincular",
        'link_name' => "Vincular :name",
        'unlink' => "Desvincular",
        'unlink_name' => "Desvincular :name",
        'unlink_confirm' => "Você tem certeza?",
    ],
    'model' => [
        'name' => "Modelo",
        'not_found' => "Modelo ':class' com ID :id não foi encontrado",
        'missing_id' => "ID do registro não especificado.",
        'missing_relation' => "Modelo ':class' não contém uma definição para o relacionamento ':relation'.",
        'missing_method' => "Modelo ':class' não contém o método ':method'.",
        'invalid_class' => "Modelo :model utilizado na classe :class não é válido. É necessário herdar a classe \Model.",
        'mass_assignment_failed' => "Mass assignment failed for Model attribute ':attribute'.",
    ],
    'warnings' => [
        'tips' => 'Dicas de configuração do sistema',
        'tips_description' => 'Há questões que você precisa prestar atenção, a fim de configurar o sistema corretamente.',
        'permissions'  => 'Diretório :name ou em seus subdiretórios não é gravável para o PHP. Por favor, defina permissões para o servidor neste diretório correspondente.',
        'extension' => 'A extenção PHP :name não está instalada. Por favor, instale esta biblioteca para ativar a extensão.'
    ],
    'editor' => [
        'menu_label' => 'Definições do Editor',
        'menu_description' => 'Gerenciar configurações do editor.',
        'font_size' => 'Tamanho da fonte',
        'tab_size' => 'Tamanho do espaçamento',
        'use_hard_tabs' => 'Recuo usando guias',
        'code_folding' => 'Código flexível',
        'word_wrap' => 'Quebra de linha',
        'highlight_active_line' => 'Destaque na linha ativa',
        'show_invisibles' => 'Mostrar caracteres invisíveis',
        'show_gutter' => 'Mostrar numeração de linhas',
        'theme' => 'Esquema de cores',
    ],
    'tooltips' => [
        'preview_website' => 'Visualizar a página'
    ],
    'mysettings' => [
        'menu_label' => 'Minhas Configurações',
        'menu_description' => 'Configurações relacionadas à sua conta de administrador',
    ],
    'myaccount' => [
        'menu_label' => 'Minha Conta',
        'menu_description' => 'Atualize os detalhes da sua conta, como nome, endereço de e-mail e senha.',
        'menu_keywords' => 'login de segurança'
    ],
    'branding' => [
        'menu_label' => 'Personalize back-end',
        'menu_description' => 'Personalize a área de administração, tais como nome, cores e logo.',
        'brand' => 'Marca',
        'logo' => 'Logo',
        'logo_description' => 'Fazer upload de um logo personalizada para usar no back-end.',
        'app_name' => 'Nome do Aplicativo',
        'app_name_description' => 'Este nome é mostrado no título da área no back-end.',
        'app_tagline' => 'Slogan do Aplicativo',
        'app_tagline_description' => 'Esta frase é mostrada na tela de login do back-end.',
        'colors' => 'Cores',
        'primary_light' => 'Primária (Clara)',
        'primary_dark' => 'Primária (Escura)',
        'secondary_light' => 'Secundária (Clara)',
        'secondary_dark' => 'Secundária (Escura)',
        'styles' => 'Estilos',
        'custom_stylesheet' => 'Personalização do estilo CSS'
    ],
    'backend_preferences' => [
        'menu_label' => 'Preferências da Administração',
        'menu_description' => 'Gerencie as preferências de idiomas e aparência da administração.',
        'locale' => 'Idioma',
        'locale_comment' => 'Selecione o idioma de sua preferência.',
    ],
    'access_log' => [
        'hint' => 'Este registro mostra a lista de acessos dos administradores. Os registros são mantidos por um período de :days dias.',
        'menu_label' => 'Registro de Acesso',
        'menu_description' => 'Veja a lista de acessos à administração.',
        'created_at' => 'Data & Hora',
        'login' => 'Login',
        'ip_address' => 'Endereço IP',
        'first_name' => 'Primeiro Nome',
        'last_name' => 'Sobrenome',
        'email' => 'E-mail',
    ],
    'filter' => [
        'all' => 'todos'
    ]
];
