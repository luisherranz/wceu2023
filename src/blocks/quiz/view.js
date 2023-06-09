import { store } from '@wordpress/interactivity';

store( {
	actions: {
		wceu2023: {
			toggle: ( { context } ) => {
				context.wceu2023.isOpen = ! context.wceu2023.isOpen;
			},
		},
	},
} );
