new Vue({
	el: "#root",
	data: {
		albumList: null,
	},
	created() {
		this.getList();
	},
	methods: {
		getList() {
			axios.get(
				"http://localhost/php-ajax-dischi/php-dischi-2/scripts/api-music-list.php"
			)
				.then((response) => {
					this.albumList = response.data;
					console.log(this.albumList);
				})
				.catch((error) => console.log(error));
		},
	},
});
