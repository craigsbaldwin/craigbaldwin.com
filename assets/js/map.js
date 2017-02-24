/*----------------------------------------------------
	LAKES MAP
----------------------------------------------------*/

/* CREATE MAP */

var map = L.map('map', { 
	zoomControl: false,
	scrollWheelZoom: false 
}).setView([54.518, -3.05], 10);

L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoiaW50ZXJtZWRpYXNvbHV0aW9ucyIsImEiOiJjaWtudXJvY2swMDhnd2ptNHB6NXBjMW4yIn0.BZeUbqCxxu6YbiIzpRU8QQ', {
	attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://mapbox.com">Mapbox</a>',
	id: 'mapbox.outdoors',
	maxZoom: 13,
	accessToken: 'pk.eyJ1IjoiaW50ZXJtZWRpYXNvbHV0aW9ucyIsImEiOiJjaWtudXJvY2swMDhnd2ptNHB6NXBjMW4yIn0.BZeUbqCxxu6YbiIzpRU8QQ'
}).addTo(map);

L.control.zoom({ position: 'topright' }).addTo(map);

map.on('contextmenu', function(e) {
	var popLocation= e.latlng;
	alert(e.latlng)     
});

/* DATA */

var data = [
	{ "name": "Latrigg", 		"latLng": [54.61373, -3.11583],	"region": "ne" },
	{ "name": "Helm Crag", 		"latLng": [54.47423, -3.03961],	"region": "ne" },
	{ "name": "Gibson Knott", 	"latLng": [54.47961, -3.04991],	"region": "ne" },
	{ "name": "Calf Crag", 		"latLng": [54.4846, -3.07909],	"region": "ne" },
	{ "name": "Castle Crag", 	"latLng": [54.53284, -3.16149],	"region": "ne" },

	{ "name": "Walla Crag", 	"latLng": [54.58131, -3.11943],	"region": "ne" },
	{ "name": "Dodd", 			"latLng": [54.6354, -3.17196],	"region": "ne" },
	{ "name": "Skiddaw", 		"latLng": [54.6499, -3.14844], 	"region": "ne" },

	{ "name": "Cat Bells", 		"latLng": [54.56758, -3.17076],	"region": "ne" },
	{ "name": "Maiden Moor", 	"latLng": [54.55265, -3.18037],	"region": "ne" },
	{ "name": "High Spy", 		"latLng": [54.53572, -3.18483],	"region": "ne" },
	{ "name": "Helvellyn", 		"latLng": [54.52566, -3.01403],	"region": "ne" },
	{ "name": "Hindscarth", 	"latLng": [54.53762, -3.2135],	"region": "ne" },
	{ "name": "Robinson", 		"latLng": [54.5412, -3.23393],	"region": "ne" },

	{ "name": "Heron Pike",		"latLng": [54.46585, -2.99532],	"region": "ne" },
	{ "name": "Nab Scar", 		"latLng": [54.45527, -2.99446],	"region": "ne" },
	{ "name": "Loughrigg Fell",	"latLng": [54.4375, -3.00802],	"region": "ne" },
	{ "name": "Stone Arthur",	"latLng": [54.47552, -300802],	"region": "ne" },
	{ "name": "Great Rigg",		"latLng": [54.4852, -2.99583],	"region": "ne" },
	{ "name": "Fairfield", 		"latLng": [54.49716, -2.9924],	"region": "ne" },
	{ "name": "Dollywagon Pike","latLng": [54.50843, -3.01094],	"region": "ne" },
	{ "name": "Nethermost Pike","latLng": [54.51749,-3.01386],	"region": "ne" },
	{ "name": "White Side",		"latLng": [54.54051, -3.0245],	"region": "ne" },
	{ "name": "Raise", 			"latLng": [54.54728, -3.01661],	"region": "ne" },
	{ "name": "Stybarrow Dodd",	"latLng": [54.56101, -3.01678],	"region": "ne" },
	{ "name": "Watson's Dodd", 	"latLng": [54.56679, -3.02759],	"region": "ne" },
	{ "name": "Great Dodd", 	"latLng": [54.57485, -3.01781],	"region": "ne" },
	{ "name": "Clough Head", 	"latLng": [54.59355, -3.03171],	"region": "ne" },
	{ "name": "Steel Fell",		"latLng": [54.49128, -3.05111],	"region": "ne" },
	{ "name": "Blea Rigg", 		"latLng": [54.46126, -3.07961],	"region": "ne" },
	{ "name": "Silver How", 	"latLng": [54.45058, -3.04235],	"region": "ne" },

	{ "name": "Skiddaw Little Man","latLng": [54.63997, -3.13711],	"region": "ne" },
	{ "name": "Carl Side", 		"latLng": [54.64245, -3.15685],	"region": "ne" },
	{ "name": "Scafell Pike",	"latLng": [54.45407, -3.21075],	"region": "ne" },
	{ "name": "Barrow",			"latLng": [54.58529, -3.19754],	"region": "ne" },
	{ "name": "Outerside",		"latLng": [54.58201, -3.22174],	"region": "ne" },

	{ "name": "Tarn Crag",		"latLng": [54.47443, -3.07669],	"region": "ne" },
	{ "name": "Loft Crag",		"latLng": [54.45437, -3.11342],	"region": "ne" },
	{ "name": "Pike O'Stickle",	"latLng": [54.45657, -3.12132],	"region": "ne" },
	{ "name": "Harrison Stickle","latLng": [54.45707, -3.10965],"region": "ne" },
	{ "name": "Pavey Ark",		"latLng": [54.46226, -3.10398],	"region": "ne" },
	{ "name": "Thunacar Knott",	"latLng": [54.46206, -3.11171],	"region": "ne" },
	{ "name": "High Raise",		"latLng": [54.47572, -3.1105],	"region": "ne" },
	{ "name": "Sergeant Man",	"latLng": [54.47044, -3.10278],	"region": "ne" },
	{ "name": "Seat Sandal",	"latLng": [54.49467, -3.01403],	"region": "ne" },
	{ "name": "Hart Crag",		"latLng": [54.49607, -2.9809],	"region": "ne" },
	{ "name": "Dove Crag",		"latLng": [54.49238, -2.97609],	"region": "ne" },
	{ "name": "High Pike",		"latLng": [54.47104, -2.96751],	"region": "ne" },
	{ "name": "Low Pike",		"latLng": [54.46216, -2.96785],	"region": "ne" },
	{ "name": "Sergeant's Crag","latLng": [54.49258, -3.12218],	"region": "ne" },
	{ "name": "Eagle Crag",		"latLng": [54.49856, -3.11943],	"region": "ne" },
	{ "name": "Ullscarf",		"latLng": [54.49985, -3.09505],	"region": "ne" },

	{ "name": "Red Screes",		"latLng": [54.47044, -2.93301],	"region": "ne" },
	{ "name": "Middle Dodd",	"latLng": [54.47752, -2.9318],	"region": "ne" },
	{ "name": "Wansfell",		"latLng": [54.43211, -2.92803],	"region": "ne" },
	
	{ "name": "Holme Fell", 	"latLng": [54.39655, -3.05592],	"region": "ne" },
	{ "name": "Black Fell", 	"latLng": [54.40504, -3.01729],	"region": "ne" },
	{ "name": "Coniston Old Man","latLng": [54.37036, -3.12098],"region": "ne" },
	{ "name": "Swirl How", 		"latLng": [54.39315, -3.12149],	"region": "ne" },
	{ "name": "Grey Friar",		"latLng": [54.39385, -3.14106],	"region": "ne" },
	{ "name": "Wetherlam", 		"latLng": [54.39995, -3.09814],	"region": "ne" },
	{ "name": "Brim Fell", 		"latLng": [54.37876, -3.12338],	"region": "ne" },
	{ "name": "Dow Crag", 		"latLng": [54.37036, -3.13728],	"region": "ne" },
	{ "name": "Carl Side", 		"latLng": [54.6354, -3.17196],	"region": "ne" },
	{ "name": "Great Carrs", 	"latLng": [54.39855, -3.12544],	"region": "ne" },
	{ "name": "Lingmoor Fell",	"latLng": [54.43211, -3.07634],	"region": "ne" },

	{ "name": "Cribyn", 		"latLng": [51.88115, -3.42001],	"region": "other" },
	{ "name": "Pen y Fan", 		"latLng": [51.88327, -3.43683],	"region": "other" },
	{ "name": "Corn Du", 		"latLng": [51.87956, -3.44353],	"region": "other" },
	{ "name": "Fan y Big",		"latLng": [51.87501, -3.40164],	"region": "other" },

	{ "name": "Mynydd Ceiswyn",	"latLng": [52.70916, -3.81638],	"region": "other" },
	{ "name": "Craig Cau", 		"latLng": [52.69053, -3.90942],	"region": "other" },
	{ "name": "Cadair Idris",	"latLng": [52.69855, -3.90993],	"region": "other" },
];

/* WRITE DATA TO MAP */

var markers = {};

for (var i = 0; i < data.length; i++) {
	var pin = data[i];

	var mountain = L.Icon.Default.extend({
		options: {
			iconUrl: '/assets/img/marker-'+pin.region+'.svg',
			iconSize: new L.Point(24, 40),
			iconAnchor: new L.Point(12, 40),
		},
		createIcon: function () {
			var div = document.createElement('div');
			var img = this._createImg(this.options['iconUrl']);
			var numdiv = document.createElement('div');
			div.appendChild ( img );
			div.appendChild ( numdiv );
			this._setIconStyles(div, 'icon');
			return div;
		},
		createShadow: function () {
			return null;
		}
	});

	var Mountain = new mountain();

	markers = L.marker(pin.latLng, {
		title: pin.name,
		riseOnHover: true,
		icon: Mountain
	}).bindPopup(pin.name, {closeButton:false}).addTo(map);
}