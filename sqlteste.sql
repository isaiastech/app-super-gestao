-- Insersão de registros tabela Contato

INSERT INTO contatos (nome, telefone, email, motivo_contato, mensagem, created_at, updated_at) VALUES
('Carlos Silva', '(11) 98765-4321', 'carlos.silva@email.com', 1, 'Gostaria de solicitar um orçamento para fornecimento mensal.', NOW(), NOW()),
('Mariana Souza', '(21) 99876-1234', 'mariana.souza@email.com', 2, 'Tenho dúvidas sobre os prazos de entrega.', NOW(), NOW()),
('João Pereira', '(31) 91234-5678', 'joao.pereira@email.com', 1, 'Preciso de mais informações sobre seus produtos.', NOW(), NOW()),
('Fernanda Lima', '(41) 97654-3210', 'fernanda.lima@email.com', 3, 'Gostaria de agendar uma reunião comercial.', NOW(), NOW()),
('Ricardo Alves', '(51) 98888-7777', 'ricardo.alves@email.com', 2, 'Meu pedido chegou com atraso, preciso de suporte.', NOW(), NOW()),
('Juliana Martins', '(71) 96543-2109', 'juliana.martins@email.com', 4, 'Parceria comercial entre nossas empresas.', NOW(), NOW()),
('Lucas Andrade', '(85) 99123-4567', 'lucas.andrade@email.com', 1, 'Solicito orçamento para compra em grande quantidade.', NOW(), NOW()),
('Patrícia Gomes', '(61) 98222-3344', 'patricia.gomes@email.com', 2, 'Como funciona a garantia dos produtos?', NOW(), NOW()),
('Eduardo Costa', '(19) 97444-5566', 'eduardo.costa@email.com', 3, 'Preciso falar com o setor financeiro.', NOW(), NOW()),
('Camila Rocha', '(27) 98333-2211', 'camila.rocha@email.com', 4, 'Interesse em revender seus produtos.', NOW(), NOW()),
('Bruno Fernandes', '(48) 99555-6677', 'bruno.fernandes@email.com', 1, 'Gostaria de receber tabela de preços atualizada.', NOW(), NOW()),
('Larissa Almeida', '(62) 99666-7788', 'larissa.almeida@email.com', 2, 'Dúvida sobre nota fiscal do pedido.', NOW(), NOW()),
('André Oliveira', '(92) 99777-8899', 'andre.oliveira@email.com', 3, 'Problema ao acessar minha conta no sistema.', NOW(), NOW()),
('Aline Barbosa', '(81) 99888-9900', 'aline.barbosa@email.com', 4, 'Proposta de fornecimento exclusivo.', NOW(), NOW()),
('Gustavo Ribeiro', '(47) 99111-2233', 'gustavo.ribeiro@email.com', 1, 'Quero saber sobre descontos para pagamento à vista.', NOW(), NOW()),
('Tatiane Castro', '(86) 99222-3344', 'tatiane.castro@email.com', 2, 'Solicito segunda via de boleto.', NOW(), NOW()),
('Rafael Mendes', '(95) 99333-4455', 'rafael.mendes@email.com', 3, 'Erro ao finalizar pedido no site.', NOW(), NOW()),
('Vanessa Cardoso', '(34) 99444-5566', 'vanessa.cardoso@email.com', 4, 'Interesse em se tornar representante regional.', NOW(), NOW()),
('Felipe Nunes', '(79) 99555-6677', 'felipe.nunes@email.com', 1, 'Pedido de cotação para novo contrato.', NOW(), NOW()),
('Renata Dias', '(83) 99666-7788', 'renata.dias@email.com', 2, 'Prazo de entrega para interior do estado.', NOW(), NOW());


-- Inserção de Registros na tabela fornecedores

INSERT INTO fornecedores (nome, site, uf, email, created_at, updated_at) VALUES
('Alpha Tecnologia Ltda', 'https://alphatecnologia.com.br', 'SP', 'contato@alphatecnologia.com.br', NOW(), NOW()),
('Comercial Souza & Filhos', NULL, 'RJ', 'vendas@souzafilhos.com.br', NOW(), NOW()),
('Distribuidora Horizonte', 'https://dhorizonte.com.br', 'MG', 'financeiro@dhorizonte.com.br', NOW(), NOW()),
('Nordeste Equipamentos', NULL, 'BA', NULL, NOW(), NOW()),
('Sul Componentes Industriais', 'https://sulcomponentes.com.br', 'RS', 'contato@sulcomponentes.com.br', NOW(), NOW()),
('Centro-Oeste Logística', 'https://col.com.br', 'GO', 'suporte@col.com.br', NOW(), NOW()),
('Amazônia Comercial', NULL, 'AM', 'atendimento@amazoniacomercial.com.br', NOW(), NOW()),
('TechMaster Solutions', 'https://techmaster.com.br', 'SC', 'contato@techmaster.com.br', NOW(), NOW()),
('Brasil Distribuição Geral', NULL, 'PR', NULL, NOW(), NOW()),
('Mega Fornecimentos Ltda', 'https://megafornecimentos.com.br', 'PE', 'vendas@megafornecimentos.com.br', NOW(), NOW()),
('Pioneira Materiais Elétricos', NULL, 'CE', 'contato@pioneiraeletrica.com.br', NOW(), NOW()),
('Inova Supply Chain', 'https://inovasupply.com.br', 'ES', 'financeiro@inovasupply.com.br', NOW(), NOW()),
('Fortaleza Imports', NULL, 'CE', NULL, NOW(), NOW()),
('Minas Distribuidora', 'https://minasdistribuidora.com.br', 'MG', 'vendas@minasdistribuidora.com.br', NOW(), NOW()),
('Paulista Atacadista', 'https://paulistaatacadista.com.br', 'SP', NULL, NOW(), NOW()),
('Paraná Equipamentos', NULL, 'PR', 'contato@paranaequipamentos.com.br', NOW(), NOW()),
('Bahia Comércio Exterior', 'https://bahiaexterior.com.br', 'BA', 'exportacao@bahiaexterior.com.br', NOW(), NOW()),
('Rio Grande Fornecedores', NULL, 'RS', NULL, NOW(), NOW()),
('Norte Serviços Industriais', 'https://norteservicos.com.br', 'PA', 'suporte@norteservicos.com.br', NOW(), NOW()),
('Delta Distribuidora Nacional', 'https://deltanacional.com.br', 'DF', 'contato@deltanacional.com.br', NOW(), NOW());