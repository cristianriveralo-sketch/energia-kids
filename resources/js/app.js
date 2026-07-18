import './bootstrap';

function initEnergyQuiz() {
    const cards = Array.from(document.querySelectorAll('[data-energy-question]'));
    const summary = document.querySelector('[data-quiz-summary]');
    const progressBar = document.querySelector('[data-progress-bar]');
    const reset = document.querySelector('[data-reset-quiz]');

    if (!cards.length) {
        return;
    }

    const total = cards.length;
    let solved = 0;

    const updateProgress = () => {
        if (summary) {
            summary.textContent = `${solved}/${total} respuestas correctas`;
        }

        if (progressBar) {
            progressBar.style.width = `${(solved / total) * 100}%`;
        }
    };

    const resetCard = (card) => {
        card.dataset.locked = 'false';
        card.classList.remove('is-correct', 'is-try');

        const slot = card.querySelector('[data-fill-slot]');
        const feedback = card.querySelector('[data-feedback]');
        const buttons = Array.from(card.querySelectorAll('[data-answer-option]'));

        if (slot) {
            slot.textContent = '____';
            slot.classList.remove('is-correct', 'is-wrong');
        }

        if (feedback) {
            feedback.textContent = 'Elige una opción.';
        }

        buttons.forEach((button) => {
            button.disabled = false;
            button.classList.remove('is-selected');
        });
    };

    cards.forEach((card) => {
        card.dataset.locked = 'false';
        const slot = card.querySelector('[data-fill-slot]');
        const feedback = card.querySelector('[data-feedback]');
        const buttons = Array.from(card.querySelectorAll('[data-answer-option]'));

        buttons.forEach((button) => {
            button.addEventListener('click', () => {
                if (card.dataset.locked === 'true') {
                    return;
                }

                const label = button.dataset.answerText || button.textContent.trim();
                const correct = button.dataset.correct === 'true';

                if (slot) {
                    slot.textContent = label;
                    slot.classList.toggle('is-correct', correct);
                    slot.classList.toggle('is-wrong', !correct);
                }

                buttons.forEach((item) => item.classList.toggle('is-selected', item === button));

                if (feedback) {
                    feedback.textContent = correct ? card.dataset.successText : card.dataset.hintText;
                }

                card.classList.toggle('is-try', !correct);

                if (correct) {
                    card.dataset.locked = 'true';
                    card.classList.add('is-correct');
                    buttons.forEach((item) => {
                        item.disabled = true;
                    });
                    solved += 1;
                    updateProgress();
                }
            });
        });
    });

    if (reset) {
        reset.addEventListener('click', () => {
            solved = 0;
            cards.forEach(resetCard);
            updateProgress();
        });
    }

    updateProgress();
}

function initClues() {
    const output = document.querySelector('[data-clue-output]');
    const buttons = Array.from(document.querySelectorAll('[data-clue]'));

    if (!output || !buttons.length) {
        return;
    }

    buttons.forEach((button) => {
        button.addEventListener('click', () => {
            buttons.forEach((item) => item.classList.toggle('is-active', item === button));
            output.textContent = button.dataset.clue || 'Observa la imagen y comparte tu respuesta.';
        });
    });
}

function initHomeMission() {
    const mission = document.querySelector('[data-home-mission]');
    const result = document.querySelector('[data-mission-result]');

    if (!mission || !result) return;

    mission.querySelectorAll('[data-mission-choice]').forEach((button) => {
        button.addEventListener('click', () => {
            mission.querySelectorAll('button').forEach((item) => item.classList.toggle('is-selected', item === button));
            result.textContent = `¡Insignia verde activada! ${button.dataset.missionChoice} Es una excelente forma de cuidar el planeta.`;
        });
    });
}

function initEcoMission() {
    const game = document.querySelector('[data-eco-mission]');
    if (!game) return;

    const questions = Array.from(game.querySelectorAll('[data-eco-question]'));
    const feedback = game.querySelector('[data-eco-feedback]');
    let solved = 0;

    questions.forEach((question) => {
        question.querySelectorAll('[data-eco-choice]').forEach((button) => {
            button.addEventListener('click', () => {
                if (question.dataset.solved === 'true') return;
                const correct = button.dataset.ecoChoice === 'true';
                question.querySelectorAll('button').forEach((item) => item.classList.remove('is-right', 'is-wrong'));
                button.classList.add(correct ? 'is-right' : 'is-wrong');

                if (!correct) {
                    feedback.textContent = 'Pista: busca la opción que evita gastar energía cuando no hace falta.';
                    return;
                }

                question.dataset.solved = 'true';
                question.classList.add('is-solved');
                question.querySelectorAll('button').forEach((item) => { item.disabled = true; });
                solved += 1;
                feedback.textContent = solved === questions.length
                    ? '¡Misión completa! Ganaste la insignia de Guardián de la Energía. ✦'
                    : `¡Muy bien! Llevas ${solved} de ${questions.length} decisiones verdes.`;
            });
        });
    });
}

function initVideoPlaceholder() {
    const button = document.querySelector('[data-video-start]');
    const status = document.querySelector('[data-video-status]');
    if (!button || !status) return;

    button.addEventListener('click', () => {
        status.textContent = '¡Muy pronto! Aquí podrás ver el video de la clase con tu profe.';
        button.classList.add('is-ready');
    });
}

function initPowerLab() {
    const lab = document.querySelector('[data-power-lab]');
    if (!lab) return;

    const sources = {
        solar: { symbol: '☀️', title: 'La luz del sol puede cargar', text: 'Un panel transforma la luz en electricidad para encender una lámpara o cargar una batería.', label: 'ENERGÍA SOLAR', color: '#f5ad25' },
        eolica: { symbol: '🌬️', title: 'El viento puede hacer girar', text: 'Las aspas de una turbina giran con el aire y ayudan a producir electricidad.', label: 'ENERGÍA EÓLICA', color: '#36a7d6' },
        hidraulica: { symbol: '💧', title: 'El agua puede mover', text: 'Cuando corre con fuerza, el agua mueve ruedas y turbinas para generar electricidad.', label: 'ENERGÍA HIDRÁULICA', color: '#4079d8' },
        electrica: { symbol: '⚡', title: 'La electricidad puede encender', text: 'Viaja por cables o se guarda en una batería para que funcionen luces y aparatos.', label: 'ENERGÍA ELÉCTRICA', color: '#8a56cc' },
    };
    const screen = lab.querySelector('[data-power-screen]');
    const symbol = lab.querySelector('[data-power-symbol]');
    const title = lab.querySelector('[data-power-title]');
    const text = lab.querySelector('[data-power-text]');
    const label = lab.querySelector('[data-power-label]');
    const meter = lab.querySelector('[data-power-meter]');

    lab.querySelectorAll('[data-power-source]').forEach((button) => {
        button.addEventListener('click', () => {
            const data = sources[button.dataset.powerSource];
            if (!data) return;
            lab.querySelectorAll('[data-power-source]').forEach((item) => item.classList.toggle('is-selected', item === button));
            symbol.textContent = data.symbol;
            title.textContent = data.title;
            text.textContent = data.text;
            label.textContent = data.label;
            meter.style.background = data.color;
            screen.style.setProperty('--lab-accent', data.color);
            screen.classList.remove('is-changing');
            window.requestAnimationFrame(() => screen.classList.add('is-changing'));
        });
    });
}

function initMatchGame() {
    const game = document.querySelector('[data-match-game]');
    if (!game) return;
    const feedback = game.querySelector('[data-match-feedback]');
    game.querySelectorAll('[data-match-card]').forEach((card) => {
        card.addEventListener('click', () => {
            game.querySelectorAll('[data-match-card]').forEach((item) => item.classList.toggle('is-selected', item === card));
            feedback.textContent = card.dataset.matchText || 'Observa la imagen y explica con tus palabras.';
        });
    });
}

function initConceptMap() {
    const game = document.querySelector('[data-concept-game]');

    if (!game) {
        return;
    }

    const choices = Array.from(game.querySelectorAll('[data-word-choice]'));
    const slots = Array.from(game.querySelectorAll('[data-concept-slot]'));
    const feedback = game.querySelector('[data-concept-feedback]');
    let selectedWord = '';
    let completed = 0;

    const setFeedback = (message) => {
        if (feedback) {
            feedback.textContent = message;
        }
    };

    choices.forEach((choice) => {
        choice.addEventListener('click', () => {
            if (choice.disabled) {
                return;
            }

            selectedWord = choice.dataset.wordChoice || choice.textContent.trim().toLowerCase();
            choices.forEach((item) => item.classList.toggle('is-selected', item === choice));
            setFeedback(`Ahora toca el espacio que corresponde a "${choice.textContent.trim()}".`);
        });
    });

    slots.forEach((slot) => {
        slot.addEventListener('click', () => {
            if (slot.classList.contains('is-correct')) {
                return;
            }

            if (!selectedWord) {
                setFeedback('Primero elige una palabra del banco.');
                return;
            }

            const correctWord = slot.dataset.conceptSlot;
            const label = slot.querySelector('[data-concept-label]');
            const isCorrect = selectedWord === correctWord;

            slot.classList.toggle('is-correct', isCorrect);
            slot.classList.toggle('is-wrong', !isCorrect);

            if (label) {
                label.textContent = selectedWord;
            }

            if (isCorrect) {
                const choice = choices.find((item) => item.dataset.wordChoice === selectedWord);

                if (choice) {
                    choice.disabled = true;
                    choice.classList.remove('is-selected');
                }

                completed += 1;
                selectedWord = '';
                setFeedback(completed === slots.length ? 'Mapa completo. Muy buen trabajo.' : 'Correcto. Elige otra palabra para seguir.');
            } else {
                setFeedback('Casi. Revisa la pista de la imagen y prueba otra rama.');
            }
        });
    });
}

function initSortGame() {
    const game = document.querySelector('[data-sort-game]');

    if (!game) {
        return;
    }

    const cards = Array.from(game.querySelectorAll('[data-sort-card]'));
    const zones = Array.from(game.querySelectorAll('[data-sort-zone]'));
    const feedback = game.querySelector('[data-sort-feedback]');
    let selectedCard = null;
    let completed = 0;

    const setFeedback = (message) => {
        if (feedback) {
            feedback.textContent = message;
        }
    };

    cards.forEach((card) => {
        card.addEventListener('click', () => {
            if (card.disabled) {
                return;
            }

            selectedCard = card;
            cards.forEach((item) => item.classList.toggle('is-selected', item === card));
            zones.forEach((zone) => zone.classList.add('is-ready'));
            setFeedback(`Elegiste "${card.dataset.label}". Ahora toca su categoría.`);
        });
    });

    zones.forEach((zone) => {
        zone.addEventListener('click', () => {
            if (!selectedCard) {
                setFeedback('Primero elige una tarjeta de imagen.');
                return;
            }

            const isCorrect = selectedCard.dataset.kind === zone.dataset.sortZone;
            zones.forEach((item) => {
                item.classList.remove('is-correct', 'is-wrong');
                item.classList.toggle('is-ready', false);
            });
            zone.classList.add(isCorrect ? 'is-correct' : 'is-wrong');

            if (isCorrect) {
                selectedCard.disabled = true;
                selectedCard.classList.remove('is-selected');
                completed += 1;
                selectedCard = null;
                setFeedback(completed === cards.length ? 'Clasificación completa. Ya reconoces fuentes y usos.' : 'Correcto. Elige otra tarjeta.');
            } else {
                setFeedback('Intenta de nuevo. Mira si es una fuente natural o un objeto que usa electricidad.');
            }
        });
    });
}

function initCrosswordGame() {
    const game = document.querySelector('[data-crossword-game]');

    if (!game) {
        return;
    }

    const words = {
        solar: 'SOLAR',
        eolica: 'EOLICA',
        agua: 'AGUA',
        luz: 'LUZ',
        viento: 'VIENTO',
        uso: 'USO',
        sol: 'SOL',
        panel: 'PANEL',
        bateria: 'BATERIA',
    };

    const wordButtons = Array.from(game.querySelectorAll('[data-cross-word]'));
    const clueButtons = Array.from(game.querySelectorAll('[data-cross-clue]'));
    const feedback = game.querySelector('[data-cross-feedback]');
    let selectedWord = '';
    let completed = 0;

    const setFeedback = (message) => {
        if (feedback) {
            feedback.textContent = message;
        }
    };

    wordButtons.forEach((button) => {
        button.addEventListener('click', () => {
            if (button.disabled) {
                return;
            }

            selectedWord = button.dataset.crossWord;
            wordButtons.forEach((item) => item.classList.toggle('is-selected', item === button));
            setFeedback(`Elegiste "${button.textContent.trim()}". Ahora toca su pista.`);
        });
    });

    clueButtons.forEach((button) => {
        button.addEventListener('click', () => {
            if (!selectedWord) {
                setFeedback('Primero elige una palabra del banco.');
                return;
            }

            const clue = button.dataset.crossClue;
            const isCorrect = selectedWord === clue;
            const cells = Array.from(game.querySelectorAll(`[data-cross-${clue}]`))
                .sort((a, b) => Number(a.dataset[`cross${clue.charAt(0).toUpperCase()}${clue.slice(1)}`]) - Number(b.dataset[`cross${clue.charAt(0).toUpperCase()}${clue.slice(1)}`]));

            if (!cells.length) {
                return;
            }

            cells.forEach((cell) => cell.classList.toggle('is-wrong', !isCorrect));

            if (!isCorrect) {
                setFeedback('Esa palabra no corresponde a la pista. Intenta con otra.');
                return;
            }

            const letters = words[clue].split('');
            const hasConflict = cells.some((cell, index) => {
                const current = cell.textContent.trim();
                return current && current !== letters[index];
            });

            if (hasConflict) {
                setFeedback('Hay una letra cruzada que no coincide. Revisa el tablero.');
                return;
            }

            cells.forEach((cell, index) => {
                cell.textContent = letters[index] || '';
                cell.classList.remove('is-wrong');
                cell.classList.add('is-filled');
            });

            button.classList.add('is-filled');

            const selectedButton = wordButtons.find((item) => item.dataset.crossWord === selectedWord);

            if (selectedButton) {
                selectedButton.disabled = true;
                selectedButton.classList.remove('is-selected');
            }

            completed += 1;
            selectedWord = '';
            setFeedback(completed === Object.keys(words).length ? 'Crucigrama completo. Excelente energía.' : 'Correcto. Elige otra palabra para seguir.');
        });
    });
}

document.addEventListener('DOMContentLoaded', () => {
    initEnergyQuiz();
    initClues();
    initHomeMission();
    initEcoMission();
    initVideoPlaceholder();
    initPowerLab();
    initMatchGame();
    initConceptMap();
    initSortGame();
    initCrosswordGame();
});
