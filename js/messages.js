function messages() {
	let url_string = window.location;
	let url = new URL(url_string);
	let lang = url.searchParams.get("lang");
	console.log(lang);
	let text = {};
	switch (lang) {
		case "en":
			text = {
				msg0: "Hola," + " I'm Catalonian Christmas log...",
				msg1: "I'm part of some unique Christmas traditions",
				msg2: "What you have there...",
				msg3: "A hat, some candy, blanket...nice!",
				capOn: "ENG Tnx for the cap... What you have there, some candy",
				candy: "that was nice... I'm tired now. Can I have a blanky",
				stick: "Oh no... what you have there... a stick... put it back please",
				sleepy: "ZZZZ",
				finishTxt: "Ups... I made a mess under my blanket.",
			};
			break;
		case "es":
			text = {
				msg0: "Hola," + " I speak spanish now",
				msg1: "I'm part of some unique Christmas traditions",
				msg2: "What you have there...",
				msg3: "A hat, some candy, blanket...nice!",
				capOn: "Tnx for the cap... I speak spanish now",
				candy: "that was nice... I'm tired now. Can I have a blanky",
				stick: "Oh no... what you have there... a stick... put it back please",
				sleepy: "ZZZZ",
				finishTxt: "Ups... I made a mess under my blanket.",
			};
			break;
		case "fr":
			text = {
				msg0: "Hola," + " I speak spanish now",
				msg1: "I'm part of some unique Christmas traditions",
				msg2: "What you have there...",
				msg3: "A hat, some candy, blanket...nice!",
				capOn: "Tnx for the cap... I speak French now",
				candy: "that was nice... I'm tired now. Can I have a blanky",
				stick: "Oh no... what you have there... a stick... put it back please",
				sleepy: "ZZZZ",
				finishTxt: "Ups... I made a mess under my blanket.",
			};
			break;
		default:
			text = {
				msg0: "Hola," + " I'm Catalonian Christmas log...",
				msg1: "I'm part of some unique Christmas traditions",
				msg2: "What you have there...",
				msg3: "A hat, some candy, blanket...nice!",
				capOn: "Tnx for the cap... What you have there, some candy",
				candy: "that was nice... I'm tired now. Can I have a blanky",
				stick: "Oh no... what you have there... a stick... put it back please",
				sleepy: "ZZZZ",
				finishTxt: "Ups... I made a mess under my blanket.",
			};
	}
	return text;
}

// return {
// 	msg0: "Hola," + " I'm Catalonian Christmas log...",
// 	msg1: "I'm part of some unique Christmas traditions",
// 	msg2: "What you have there...",
// 	msg3: "A hat, some candy, blanket...nice!",
// 	capOn: "Tnx for the cap... What you have there, some candy",
// 	candy: "that was nice... I'm tired now. Can I have a blanky",
// 	stick: "Oh no... what you have there... a stick... put it back please",
// 	sleepy: "ZZZZ",
// 	finishTxt: "Ups... I made a mess under my blanket.",
// };
