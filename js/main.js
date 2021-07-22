var total = "30.27";
if (document.querySelector(".btnModal")) {
	var modal = document.getElementById("tvesModal");
	var btn1 = document.querySelector("#btnModal1");
	var btn2 = document.querySelector("#btnModal2");
	var btn3 = document.querySelector("#btnModal3");
	var btn4 = document.querySelector("#btnModal4");
	var span = document.getElementsByClassName("close")[0];
	var body = document.getElementsByTagName("body")[0];
	var week = 0;

	//Abre el modal del precio 1
	btn1.onclick = function () {
		modal.style.display = "block";
		week = btn1.children[0].children[0].innerHTML;
		total = "30.2";
		var precio = document.querySelector("#precio");
		precio.innerHTML = "630";
		body.style.position = "static";
		body.style.height = "100%";
		body.style.overflow = "hidden";
	};
	//Abre el modal del precio 2
	btn2.onclick = function () {
		modal.style.display = "block";
		week = btn2.children[0].children[0].innerHTML;
		var precio = document.querySelector("#precio");
		precio.innerHTML = "1040";
		total = "49.85";
		body.style.position = "static";
		body.style.height = "100%";
		body.style.overflow = "hidden";
	};

	//Abre el modal del precio 3
	btn3.onclick = function () {
		modal.style.display = "block";
		week = btn3.children[0].children[0].innerHTML;
		precio.innerHTML = "1560";
		total = "74.78";
		body.style.position = "static";
		body.style.height = "100%";
		body.style.overflow = "hidden";
	};

	//Abre el modal del precio 4
	btn4.onclick = function () {
		modal.style.display = "block";
		week = btn4.children[0].children[0].innerHTML;
		precio.innerHTML = "650";
		total = "32.54";
		body.style.position = "static";
		body.style.height = "100%";
		body.style.overflow = "hidden";
	};

	span.onclick = function () {
		modal.style.display = "none";
		body.style.position = "inherit";
		body.style.position = "auto";
		body.style.overflow = "visible";
	};

	window.onclick = function (event) {
		if (event.target == modal) {
			modal.style.display = "none";
			body.style.position = "inherit";
			body.style.height = "auto";
			body.style.overflow = "visible";
		}
	};
}

// Obtener el precio
paypal_sdk
	.Buttons({
		style: {
			color: "blue",
			layout: "horizontal",
		},
		createOrder: function (data, actions) {
			return actions.order.create({
				purchase_units: [
					{
						amount: {
							currency: "MXN",
							value: total,
						},
					},
				],
			});
		},
		onApprove: function (data, actions) {
			return actions.order.capture().then(function (details) {
				if (details.status === "COMPLETED") {
					Swal.fire(
						"Compra exitosa!",
						"Verifique su correo!",
						"success"
					);
				} else {
					Swal.fire(
						"Ha ocurrido un error!",
						"Hubo un problema al generar la compra intente mas tarde!",
						"error"
					);
				}
			});
		},
	})
	.render("#paypal");
