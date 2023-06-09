import { store } from '@wordpress/interactivity';

store( {
	state: {
		wceu2023: {
			selected: null,
		},
	},
	selectors: {
		wceu2023: {
			isOpen: ( { state, context } ) =>
				state.wceu2023.selected === context.wceu2023.id,
		},
	},
	actions: {
		wceu2023: {
			toggle: ( { state, context } ) => {
				if ( state.wceu2023.selected === context.wceu2023.id ) {
					state.wceu2023.selected = null;
				} else {
					state.wceu2023.selected = context.wceu2023.id;
				}
			},
		},
	},
} );
