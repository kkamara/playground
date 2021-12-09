import React from 'react'
import { Link, } from 'react-router-dom' 
import {
    AppBar, 
    CssBaseline, 
    Toolbar, 
    Typography, 
} from '@material-ui/core'

import { useStyles } from '../../styles/styles'

export default function Header() {
  const classes = useStyles() 

  return (
    <div className={classes.root}>
      <CssBaseline />
      <AppBar position="fixed" className={classes.header}>

        <Toolbar>

          <Typography 
            variant="h6" 
            noWrap 
            className={classes.title}
          >
            <Link to="/home" className={classes.link}> Cat Fact Finder</Link>
          </Typography>

          <Typography 
            variant="h6" 
            noWrap 
            className={classes.title}
          >
              Welcome to Cat Fact Finder
          </Typography>
            
        </Toolbar>
      </AppBar>
    </div>
  )
}
