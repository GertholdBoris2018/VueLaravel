<template>
	<div>
		<navigation></navigation>
		<transition name="fade" mode="out-in">
			<router-view></router-view>
		</transition>
		<!-- <app-footer></app-footer> -->
	</div>
</template>

<script>
	import Navigation from './partials/Navigation.vue';
	import Footer from './partials/Footer.vue';

	export default {
		components: {
			'navigation': Navigation,
			'app-footer': Footer
		}
	}
</script>