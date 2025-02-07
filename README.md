# Game Window Layout

This project implements the basic layout for a game window, divided into three main areas: Encounter Area, Stage Area, and Player Area. The layout is designed to be responsive and allows for resizing of the components.

## Project Structure

```
game-window-layout
├── src
│   ├── components
│   │   ├── EncounterArea.tsx      # Renders the encounter area with a placeholder for the portrait puppet and stats.
│   │   ├── StageArea.tsx          # Renders the stage area with a placeholder for the parallax background and dialog area.
│   │   ├── PlayerArea.tsx         # Renders the player area with a placeholder for the player's portrait and stats.
│   │   └── Layout.tsx             # Arranges the EncounterArea, StageArea, and PlayerArea in a responsive layout.
│   ├── App.tsx                     # Main application component that renders the Layout component.
│   └── index.tsx                   # Entry point for the React application.
├── public
│   └── index.html                  # Main HTML file that includes the root element for the React application.
├── package.json                    # Configuration file for npm, listing dependencies and scripts.
├── tsconfig.json                   # Configuration file for TypeScript, specifying compiler options.
└── README.md                       # Documentation for the project.
```

## Setup Instructions

1. Clone the repository:
   ```
   git clone https://github.com/frogillius/puppetEngine
   ```

2. Navigate to the project directory:
   ```
   cd puppetEngine
   ```

3. Install the dependencies:
   ```
   npm install
   ```

4. Start the development server:
   ```
   npm start
   ```

## Overview

This project serves as a foundation for a game window layout, focusing on modular components that can be easily modified or extended for future development. The logic for puppets and stages will be implemented in subsequent updates.
