function getRandomIntInclusive(min, max){

	min= Math.ceil(min);
	max= Math.floor(max);
	return Math.floor(Math.random() * (max - min + 1)) + min;

}

function GerarFraseDoDia(){

	frases = 
	["Uma simples atitude pode salvar muitas vidas.",
	 "A ponta da agulha pra doar é bem “negativo” mas  doar sangue é bem “positivo”.",
	 "Doação de sangue para quem doa são alguns minutos, mas pra quem recebe é uma vida inteira.",
	 "A doação de sangue é segura e demora cerca de 30 minutos. ",
	 "Não é apenas sangue é amor.",
	 "A doação de sangue deve ser como a corrente sanguínea, não pode parar. Seja um doador!",
	 "Hoje é dia de se doar.",
	 "Doe sangue e salve outras vidas.",
	 "Faça a vida fluir nas veias de quem precisa, doe sangue.",
	 "A felicidade de alguém pode depender de uma atitude sua, Doe Sangue e mude vidas.",
	 "Você sabia que uma única doação pode ajudar a salvar a vida de até quatro pessoas?",
	 "Doe sangue, Doe Vida e compartilhe essa ideia.",
	 "Doar faz bem para o seu coração e o de quem precisa.",
	 "Doar sangue não custa nada mas pode valer uma vida.",
	 "Doar sangue não vicia, mas causa muita alegria.",
	 "Doar sangue é multiplicar amor.",
	 "Quem precisa de sangue não pode perder tempo, doe sangue salve vidas.",
	 "Compre essa ideia, não custa nada e vale muito.",
	];

	var valor = getRandomIntInclusive(0, 17);

	document.getElementById("lblFraseDoDia").innerHTML = frases[valor];

}