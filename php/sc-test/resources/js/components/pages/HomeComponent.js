import React, { useState } from 'react'
import { useStyles } from '../../styles/styles'
import httpService from '../../services/HttpService'

const http = new httpService()

function HomeComponent() { 
  const classes = useStyles()
  const [fact, setFacts] = useState(null)

  const onNewFactBtnClick = async () => {
    const data = await http.getFact(null)
    setFacts(data.data.text)
  }

  const getFact = () => fact ? <p className="lead">{fact}</p> : null

  return (
    <>
      <div className={`${classes.homeRoot} container jumbotron`}>
        <div className="col-md-6 offset-md-3">
          {getFact()}
          <br />
          <button 
            onClick={onNewFactBtnClick}
            className='btn btn-success'
          >
            Get New Fact
          </button>
        </div>
      </div>
    </>       
  )
} 

export default HomeComponent
