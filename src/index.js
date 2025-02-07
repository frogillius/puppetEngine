// This file is the entry point of the application. It initializes the game window layout and renders the main components.

import React from 'react';
import ReactDOM from 'react-dom';
import EncounterArea from './components/EncounterArea';
import StageArea from './components/StageArea';
import PlayerArea from './components/PlayerArea';

const App = () => {
    return (
        <div className="game-window">
            <div className="section-1">
                <EncounterArea />
            </div>
            <div className="section-2">
                <StageArea />
            </div>
            <div className="section-3">
                <PlayerArea />
            </div>
        </div>
    );
};

ReactDOM.render(<App />, document.getElementById('root'));