/**
 * WordPress dependencies
 */
import { store, getContext, getElement } from '@wordpress/interactivity';

const { state, selectors } = store( 'wceu2023', {
	actions: {
		toggle: () => {
			const context = getContext();

			if ( state.selected === context.id ) {
				state.selected = null;
			} else {
				state.selected = context.id;
			}
		},
		closeOnEsc: ( event ) => {
			if ( event.key === 'Escape' ) {
				state.selected = null;

				const { ref } = getElement();

				ref.querySelector( 'button[aria-controls^="quiz-"]' ).focus();
			}
		},
		answerBoolean: () => {
			const context = getContext();
			const answer = context.thisAnswer;

			const id = context.id;
			const quiz = state.quizzes[ id ];

			if ( quiz.current !== context.thisAnswer ) {
				quiz.current = context.thisAnswer;
			} else {
				quiz.current = null;
			}
		},
		answerInput: ( event ) => {
			const context = getContext();
			const id = context.id;
			state.quizzes[ id ].current = event.target.value || null;
		},
	},
	selectors: {
		isOpen: () => {
			const context = getContext();
			return state.selected === context.id;
		},
		toggleText: () => {
			return selectors.isOpen() ? state.closeText : state.openText;
		},
		isActive: () => {
			const context = getContext();
			const id = context.id;

			return state.quizzes[ id ].current === context.thisAnswer;
		},
		inputAnswer: () => {
			const context = getContext();
			const id = context.id;

			return state.quizzes[ id ].current || '';
		},
	},
	callbacks: {
		focusOnOpen: () => {
			if ( selectors.isOpen() ) {
				const { ref } = getElement();
				ref.focus();
			}
		},
	},
} );
