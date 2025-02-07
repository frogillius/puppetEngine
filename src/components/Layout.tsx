import React from 'react';
import EncounterArea from './EncounterArea';
import StageArea from './StageArea';
import PlayerArea from './PlayerArea';
import './Layout.css'; // Assuming you will create a CSS file for styling

const Layout: React.FC = () => {
    return (
        <div className="layout">
            <div className="encounter-area">
                <EncounterArea />
            </div>
            <div className="stage-area">
                <StageArea />
            </div>
            <div className="player-area">
                <PlayerArea />
            </div>
        </div>
    );
};

export default Layout;