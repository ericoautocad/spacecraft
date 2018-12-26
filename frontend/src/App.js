import React, { Component } from 'react' 
import 'bootstrap/dist/css/bootstrap.css' 
import './App.css' 
import { BrowserRouter as Rotas, Route } from 'react-router-dom' 
import HeaderComponent from './components/HeaderComponent' 
import SpacecraftlistComponent from './components/SpacecraftlistComponent' 
import SpacecraftlistinformationComponent from './components/spacecraft/SpacecraftlistinformationComponent' 
import SpacecraftstopcalculationComponent from './components/spacecraft/SpacecraftstopcalculationComponent' 

class App extends Component { 
  
  render() {
    return (
      <div className="App">
        <HeaderComponent/> 
        <Rotas> 
          
          <div> 
            
            <Route exact path = "/" component = {SpacecraftlistComponent} /> 
            <Route exact path = "/spacecraft" component = {SpacecraftlistinformationComponent} /> 
            <Route exact path = "/spacecraftstopcalculation" component = {SpacecraftstopcalculationComponent} /> 
            
          </div> 
          
        </Rotas>
      </div>
    );
  }
}

export default App;
