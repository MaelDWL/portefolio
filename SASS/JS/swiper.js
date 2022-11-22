const swiper = new Swiper('.timeline .swiper-container', {
	direction: 'vertical',
	loop: false,
	speed: 1600,

	// Pagination
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
		renderBullet: function (index, className) {
			let year = document.querySelectorAll('.swiper-slide')[index].getAttribute('data-year');

			return '<span class="' + className + '">' + year + '</span>';
		},
	},
	// paginationBulletRender: function (swiper, index, className) {
	// 	let year = document.querySelectorAll('.swiper-slide')[index].getAttribute('data-year');
	//
	// 	return '<span class="' + className + '">' + year + '</span>';
	// },


	// Navigation arrows
	navigation:
	{
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},

	breakpoints: {
		768: {
			direction: 'horizontal',
		}
	}
});
