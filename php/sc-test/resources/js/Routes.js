import React from 'react'
import {
    Switch,
    Route,
    Redirect,
} from 'react-router-dom'

import Header from './components/layouts/Header'

import Home from "./components/pages/HomeComponent"

function Routes(){
  return (
    <>
      <Header/>
      <Switch>
        <Route exact path="/" render={props => (
            <Redirect to={{ pathname: '/home' }} />
        )}/>

        <Route path="/home" component={Home}/>   

      </Switch>
    </>
  )
}

export default Routes
