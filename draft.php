$nome   = $_POST['campo_nome'];
$dataNascimento   = $_POST['campo_dataNascimento'];
$cpf  = $_POST['campo_cpf'];
$rg   = $_POST['campo_rg'];
$rgOrgaoExpedidor   = $_POST['campo_rgOrgaoExpedidor'];
$rgDataExpedicao  = $_POST['campo_rgDataExpedicao'];
$genero   = $_POST['campo_genero'];
$estadoCivil  = $_POST['campo_estadoCivil'];
$nacionalidade  = $_POST['campo_nacionalidade'];
$nomeConjuge  = $_POST['campo_nomeConjuge'];
$dataNascimentoConjuge  = $_POST['campo_dataNascimentoConjuge'];
$nomeMae  = $_POST['campo_nomeMae'];
$nomePai  = $_POST['campo_nomePai'];
$email  = $_POST['campo_email'];
$telefoneFixo   = $_POST['campo_telefoneFixo'];
$telefoneCelular  = $_POST['campo_telefoneCelular'];
$ondeConheceuFocco  = $_POST['campo_ondeConheceuFocco'];
$ofertasEmail   = $_POST['campo_ofertasEmail'];
$ofertasWhatsapp  = $_POST['campo_ofertasWhatsapp'];
$cepResidencial   = $_POST['campo_cepResidencial'];
$logradouroResidencial  = $_POST['campo_logradouroResidencial'];
$numeroResidencial  = $_POST['campo_numeroResidencial'];
$complementoResidencial   = $_POST['campo_complementoResidencial'];
$bairroResidencial  = $_POST['campo_bairroResidencial'];
$cidadeResidencial  = $_POST['campo_cidadeResidencial'];
$estadoResidencial  = $_POST['campo_estadoResidencial'];
$cepEntrega   = $_POST['campo_cepEntrega'];
$logradouroEntrega  = $_POST['campo_logradouroEntrega'];
$numeroEntrega  = $_POST['campo_numeroEntrega'];
$complementoEntrega   = $_POST['campo_complementoEntrega'];
$bairroEntrega  = $_POST['campo_bairroEntrega'];
$cidadeEntrega  = $_POST['campo_cidadeEntrega'];
$estadoEntrega  = $_POST['campo_estadoEntrega'];
$pessoaAutorizada  = $_POST['campo_pessoaAutorizada'];
$observacoes  = $_POST['campo_observacoes'];

campo_nome
campo_dataNascimento
campo_cpf
campo_rg
campo_rgOrgaoExpedidor
campo_rgDataExpedicao
campo_genero
campo_estadoCivil
campo_nacionalidade
campo_nomeConjuge
campo_dataNascimentoConjuge
campo_nomeMae
campo_nomePai
campo_email
campo_telefoneFixo
campo_telefoneCelular
campo_ondeConheceuFocco
campo_ofertasEmail
campo_ofertasWhatsapp
campo_cepResidencial
campo_logradouroResidencial
campo_numeroResidencial
campo_complementoResidencial
campo_bairroResidencial
campo_cidadeResidencial
campo_estadoResidencial
campo_cepEntrega
campo_logradouroEntrega
campo_numeroEntrega
campo_complementoEntrega
campo_bairroEntrega
campo_cidadeEntrega
campo_estadoEntrega
campo_pessoaAutorizada
campo_observacoes

$nome
$dataNascimento
$cpf
$rg
$rgOrgaoExpedidor
$rgDataExpedicao
$genero
$estadoCivil
$nacionalidade
$nomeConjuge
$dataNascimentoConjuge
$nomeMae
$nomePai
$email
$telefoneFixo
$telefoneCelular
$ondeConheceuFocco
$ofertasEmail
$ofertasWhatsapp
$cepResidencial
$logradouroResidencial
$numeroResidencial
$complementoResidencial
$bairroResidencial
$cidadeResidencial
$estadoResidencial
$cepEntrega
$logradouroEntrega
$numeroEntrega
$complementoEntrega
$bairroEntrega
$cidadeEntrega
$estadoEntrega
$pessoaAutorizada
$observacoes

nome
dataNascimento
cpf
rg
rgOrgaoExpedidor
rgDataExpedicao
genero
estadoCivil
nacionalidade
nomeConjuge
dataNascimentoConjuge
nomeMae
nomePai
email
telefoneFixo
telefoneCelular
ondeConheceuFocco
ofertasEmail
ofertasWhatsapp
cepResidencial
logradouroResidencial
numeroResidencial
complementoResidencial
bairroResidencial
cidadeResidencial
estadoResidencial
cepEntrega
logradouroEntrega
numeroEntrega
complementoEntrega
bairroEntrega
cidadeEntrega
estadoEntrega
pessoaAutorizada
observacoes

var cmp_nome = $("#nome").val();
var cmp_dataNascimento = $("#dataNascimento").val();
var cmp_cpf = $("#cpf").val();
var cmp_rg = $("#rg").val();
var cmp_genero = $("#genero option:selected").text();
var cmp_estadoCivil = $("#estadoCivil option:selected").text();
var cmp_nacionalidade = $("#nacionalidade").val();
var cmp_nomeMae = $("#nomeMae").val();
var cmp_nomePai = $("#nomePai").val();
var cmp_email = $("#email").val();
var cmp_telefoneCelular = $("#telefoneCelular").val();
var cmp_ondeConheceuFocco = $("#ondeConheceuFocco option:selected").text();
var cmp_cepResidencial = $("#cep-residencial").val();
var cmp_cepEntrega = $("#cep-entrega").val();
var cmp_pessoaAutorizada = $("#pessoa-autorizada").val();