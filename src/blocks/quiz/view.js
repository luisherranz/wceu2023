import { store } from '@wordpress/interactivity';

store( {
	selectors: {
		wceu2023: {
			isOpen: ( { state, context } ) =>
				state.wceu2023.selected === context.wceu2023.id,
			toggleText: ( store ) => {
				const { selectors, state } = store;
				return selectors.wceu2023.isOpen( store )
					? state.wceu2023.closeText
					: state.wceu2023.openText;
			},
			isAnswerYes: ( { context } ) => context.wceu2023.answer === true,
			isAnswerNo: ( { context } ) => context.wceu2023.answer === false,
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
			closeOnEsc: ( { state, event, ref } ) => {
				if ( event.key === 'Escape' ) {
					state.wceu2023.selected = null;
					ref.querySelector(
						'button[aria-controls^="quiz-"]'
					).focus();
				}
			},
			answerYes: ( { context } ) => {
				if ( context.wceu2023.answer === true ) {
					context.wceu2023.answer = null;
				} else {
					context.wceu2023.answer = true;
				}
			},
			answerNo: ( { context } ) => {
				if ( context.wceu2023.answer === false ) {
					context.wceu2023.answer = null;
				} else {
					context.wceu2023.answer = false;
				}
			},
		},
	},
	effects: {
		wceu2023: {
			focusOnOpen: ( store ) => {
				const { selectors, ref } = store;
				if ( selectors.wceu2023.isOpen( store ) ) {
					ref.focus();
				}
			},
		},
	},
} );
