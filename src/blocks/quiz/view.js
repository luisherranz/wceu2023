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
			isActive: ( { state, context } ) => {
				const id = context.wceu2023.id;
				return (
					state.wceu2023.quizzes[ id ].current ===
					context.wceu2023.thisAnswer
				);
			},
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
			answer: ( { state, context } ) => {
				const id = context.wceu2023.id;
				const quiz = state.wceu2023.quizzes[ id ];
				if ( quiz.current !== context.wceu2023.thisAnswer ) {
					quiz.current = context.wceu2023.thisAnswer;
				} else {
					quiz.current = null;
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
