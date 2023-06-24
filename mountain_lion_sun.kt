//KOTLIN FILE FOR "ART FOR IMPACT" 

package artforImpact

//Imports
import java.util.Random
import android.graphics.Color

//Class
class ArtforImpact {
    
    //Member Variables
    private var canvasSize: Int
    private var canvas: Array<Float>
    private var palette: Array<Int>
    
    //Constructor
    constructor(size: Int, palette: Array<Int>){
        this.canvasSize = size
        this.canvas = Array(size*size){0f}
        this.palette = palette
    }
    
    //Methods
    //getters
    fun getCanvasSize(): Int {
        return this.canvasSize
    }
    fun getCanvas(): Array<Float> {
        return this.canvas
    }
    fun getPalette(): Array<Int> {
        return this.palette
    }
    
    //setters
    fun setCanvasSize(size: Int){
        this.canvasSize = size
    }
    fun setCanvas(canvas: Array<Float>){
        this.canvas = canvas
    }
    fun setPalette(palette: Array<Int>){
        this.palette = palette
    }
    
    //other methods
    fun generateRandomCanvas(){
        val random = Random()
        for(i in 0 until this.canvasSize * this.canvasSize){
            this.canvas[i] = random.nextFloat()
        }
    }
    
    fun generateRandomPalette(){
        val random = Random()
        for(i in 0 until this.canvasSize * this.canvasSize){
            this.palette[i] = Color.argb(255, random.nextInt(256), random.nextInt(256),random.nextInt(256))
        }
    }
    
    fun createArt(){
        //code for creating art
    }
    
    fun saveArt(){
        //code for saving art
    }
    
    fun displayArt(){
        //code for displaying art
    }
}