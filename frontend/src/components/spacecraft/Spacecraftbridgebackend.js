import axios from 'axios' 

const ENTRYPOINTSERVER = 'http://localhost' 

const findspacecraft = () => { 
    
    const endpointrequest = `${ENTRYPOINTSERVER}/` 
    
    return axios.get(endpointrequest).then(response => response)
} 
const spacecraftstopcalculation = (distance) => { 
    
    let distancefloat = parseFloat( distance ) 
        
    if( isNaN( distancefloat ) ){ 
        
        distancefloat = 0
        
    } 
    
    const endpointrequest = `${ENTRYPOINTSERVER}/` 
    
    return axios.post(endpointrequest, { distance : distancefloat } ).then( result => result ) 
    
}

export { 
    
    findspacecraft, 
    
    spacecraftstopcalculation 

} 
